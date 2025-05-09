<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use HWI\Bundle\OAuthBundle\Security\Core\Authentication\Token\OAuthToken;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class QQResourceOwner extends GenericOAuth2ResourceOwner
{
    public const TYPE = 'qq';

    /**
     * {@inheritdoc}
     */
    protected array $paths = [
        'identifier' => 'openid',
        'nickname' => 'nickname',
        'realname' => 'nickname',
        'profilepicture' => 'figureurl_qq_1',
    ];

    /**
     * {@inheritdoc}
     */
    public function getResponseContent(ResponseInterface $rawResponse): array
    {
        $content = $rawResponse->getContent(false);
        if (preg_match('/^callback\((.+)\);$/', $content, $matches)) {
            return json_decode(trim($matches[1]), true) ?: [];
        }

        return parent::getResponseContent($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserInformation(?array $accessToken = null, array $extraParameters = [])
    {
        $openid = $extraParameters['openid'] ?? $this->requestUserIdentifier($accessToken);

        $url = $this->normalizeUrl($this->options['infos_url'], [
            'oauth_consumer_key' => $this->options['client_id'],
            'access_token' => $accessToken['access_token'],
            'openid' => $openid,
            'format' => 'json',
        ]);

        $response = $this->doGetUserInformationRequest($url);
        $content = $this->getResponseContent($response);

        // Custom errors:
        if (isset($content['ret']) && 0 === $content['ret']) {
            $content['openid'] = $openid;
        } else {
            throw new AuthenticationException(\sprintf('OAuth error: %s', isset($content['ret']) ? $content['msg'] : 'invalid response'));
        }

        $response = $this->getUserResponse();
        $response->setData($content);
        $response->setResourceOwner($this);
        $response->setOAuthToken(new OAuthToken($accessToken));

        return $response;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'authorization_url' => 'https://graph.qq.com/oauth2.0/authorize?format=json',
            'access_token_url' => 'https://graph.qq.com/oauth2.0/token',
            'infos_url' => 'https://graph.qq.com/user/get_user_info',
            'me_url' => 'https://graph.qq.com/oauth2.0/me',
        ]);
    }

    private function requestUserIdentifier(?array $accessToken = null)
    {
        $url = $this->normalizeUrl($this->options['me_url'], [
            'access_token' => $accessToken['access_token'],
        ]);

        $response = $this->httpRequest($url);
        $content = $this->getResponseContent($response);

        if (!isset($content['openid'])) {
            throw new AuthenticationException();
        }

        return $content['openid'];
    }
}
