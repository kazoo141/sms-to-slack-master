<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSessionReset(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSessionReset(), $fetch);
    }

    /**
     * Checks API calling code.
     *
     * @param array $queryParameters {
     *
     *     @var string $foo example property to return
     *     @var string $error Error response to return
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ApiTestGetResponse200|\JoliCode\Slack\Api\Model\ApiTestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiTest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ApiTest($queryParameters), $fetch);
    }

    /**
     * Returns list of permissions this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsInfo($queryParameters), $fetch);
    }

    /**
     * Allows an app to request additional scopes.
     *
     * @param array $queryParameters {
     *
     *     @var string $scopes A comma separated list of scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $trigger_id Token used to trigger the permissions API
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsRequest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsRequest($queryParameters), $fetch);
    }

    /**
     * Returns list of resource grants this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var int $limit The maximum number of items to return.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsResourcesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsResourcesList($queryParameters), $fetch);
    }

    /**
     * Returns list of scopes this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsScopesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsScopesList($queryParameters), $fetch);
    }

    /**
     * Returns list of user grants and corresponding scopes this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var int $limit The maximum number of items to return.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsUsersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsUsersList($queryParameters), $fetch);
    }

    /**
     * Enables an app to trigger a permissions modal to grant an app access to a user access scope.
     *
     * @param array $queryParameters {
     *
     *     @var string $scopes A comma separated list of user scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $user The user this scope is being requested for
     *     @var string $trigger_id Token used to trigger the request
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsUsersRequest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsUsersRequest($queryParameters), $fetch);
    }

    /**
     * Uninstalls your app from a workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_secret issued when you created your application
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $client_id Issued when you created your application.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsUninstallGetResponse200|\JoliCode\Slack\Api\Model\AppsUninstallGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsUninstall(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AppsUninstall($queryParameters), $fetch);
    }

    /**
     * Revokes a token.
     *
     * @param array $queryParameters {
     *
     *     @var bool $test setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AuthRevokeGetResponse200|\JoliCode\Slack\Api\Model\AuthRevokeGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function authRevoke(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AuthRevoke($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AuthTestGetResponse200|\JoliCode\Slack\Api\Model\AuthTestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function authTest(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\AuthTest(), $fetch);
    }

    /**
     * Gets information about a bot user.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $bot Bot user to get info on
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\BotsInfoGetResponse200|\JoliCode\Slack\Api\Model\BotsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function botsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\BotsInfo($queryParameters), $fetch);
    }

    /**
     * Archives a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Channel to archive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsArchivePostResponse200|\JoliCode\Slack\Api\Model\ChannelsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsArchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsArchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $validate whether to return errors on invalid channel name instead of modifying it to meet the specified criteria
     *     @var string $name Name of channel to create
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsCreatePostResponse200|\JoliCode\Slack\Api\Model\ChannelsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Fetches history of messages and events from a channel.
     *
     * @param array $queryParameters {
     *
     *     @var int $count number of messages to return, between 1 and 1000
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive include messages with latest or oldest timestamp in results
     *     @var string $token Authentication token. Requires scope: `channels:history`
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel channel to fetch history for
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsHistoryGetResponse200|\JoliCode\Slack\Api\Model\ChannelsHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsHistory($queryParameters), $fetch);
    }

    /**
     * Gets information about a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:read`
     *     @var bool $include_locale Set this to `true` to receive the locale for this channel. Defaults to `false`
     *     @var string $channel Channel to get info on
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsInfoGetResponse200|\JoliCode\Slack\Api\Model\ChannelsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsInfo($queryParameters), $fetch);
    }

    /**
     * Invites a user to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $user user to invite to channel
     *     @var string $channel Channel to invite user to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsInvitePostResponse200|\JoliCode\Slack\Api\Model\ChannelsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * Joins a channel, creating it if needed.
     *
     * @param array $formParameters {
     *
     *     @var bool $validate whether to return errors on invalid channel name instead of modifying it to meet the specified criteria
     *     @var string $name Name of channel to join
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsJoinPostResponse200|\JoliCode\Slack\Api\Model\ChannelsJoinPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsJoin(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsJoin($formParameters, $headerParameters), $fetch);
    }

    /**
     * Removes a user from a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $user user to remove from channel
     *     @var string $channel Channel to remove user from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsKickPostResponse200|\JoliCode\Slack\Api\Model\ChannelsKickPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsKick(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsKick($formParameters, $headerParameters), $fetch);
    }

    /**
     * Leaves a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Channel to leave
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsLeavePostResponse200|\JoliCode\Slack\Api\Model\ChannelsLeavePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsLeave(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsLeave($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists all channels in a Slack team.
     *
     * @param array $queryParameters {
     *
     *     @var bool $exclude_members Exclude the `members` collection from each `channel`
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `channels:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var bool $exclude_archived Exclude archived channels from the list
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsListGetResponse200|\JoliCode\Slack\Api\Model\ChannelsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsList($queryParameters), $fetch);
    }

    /**
     * Sets the read cursor in a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $ts timestamp of the most recently seen message
     *     @var string $channel Channel to set reading cursor in.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsMarkPostResponse200|\JoliCode\Slack\Api\Model\ChannelsMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsMark(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsMark($formParameters, $headerParameters), $fetch);
    }

    /**
     * Renames a channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $validate whether to return errors on invalid channel name instead of modifying it to meet the specified criteria
     *     @var string $name new name for channel
     *     @var string $channel Channel to rename
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsRenamePostResponse200|\JoliCode\Slack\Api\Model\ChannelsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsRename(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsRename($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $thread_ts Unique identifier of a thread's parent message
     *     @var string $token Authentication token. Requires scope: `channels:history`
     *     @var string $channel Channel to fetch thread from
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsRepliesGetResponse200|\JoliCode\Slack\Api\Model\ChannelsRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsReplies($queryParameters), $fetch);
    }

    /**
     * Sets the purpose for a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $purpose The new purpose
     *     @var string $channel Channel to set the purpose of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsSetPurposePostResponse200|\JoliCode\Slack\Api\Model\ChannelsSetPurposePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsSetPurpose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsSetPurpose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sets the topic for a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $topic The new topic
     *     @var string $channel Channel to set the topic of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsSetTopicPostResponse200|\JoliCode\Slack\Api\Model\ChannelsSetTopicPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsSetTopic(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsSetTopic($formParameters, $headerParameters), $fetch);
    }

    /**
     * Unarchives a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Channel to unarchive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChannelsUnarchivePostResponse200|\JoliCode\Slack\Api\Model\ChannelsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function channelsUnarchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChannelsUnarchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a message.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *     @var string $ts timestamp of the message to be deleted
     *     @var string $channel Channel containing the message to be deleted.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatDeletePostResponse200|\JoliCode\Slack\Api\Model\ChatDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatDeleteScheduledMessage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatDeleteScheduledMessage(), $fetch);
    }

    /**
     * Retrieve a permalink URL for a specific extant message.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var float $message_ts A message's `ts` value, uniquely identifying it within a channel
     *     @var string $channel The ID of the conversation or channel containing the message
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200|\JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatGetPermalink(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatGetPermalink($queryParameters), $fetch);
    }

    /**
     * Share a me message into a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $text text of the message to send
     *     @var string $channel Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatMeMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatMeMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatMeMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatMeMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sends an ephemeral message to a user in a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $thread_ts Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var bool $as_user Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var string $text Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead.
     *     @var string $user `id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
     *     @var bool $link_names find and link channel names and usernames
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200|\JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatPostEphemeral(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatPostEphemeral($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sends a message to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var bool $unfurl_links pass true to enable unfurling of primarily text-based content
     *     @var string $text Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages).
     *     @var bool $unfurl_media pass false to disable unfurling of media content
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *     @var bool $mrkdwn Disable Slack markup parsing by setting to `false`. Enabled by default.
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var string $username Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $icon_emoji Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *     @var bool $link_names find and link channel names and usernames
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var string $icon_url URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatPostMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatPostMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var bool $unfurl_links pass true to enable unfurling of primarily text-based content
     *     @var string $text Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages).
     *     @var bool $link_names find and link channel names and usernames
     *     @var bool $unfurl_media pass false to disable unfurling of media content
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *     @var string $post_at unix EPOCH timestamp of time in future to send the message
     *     @var string $channel Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatScheduleMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatScheduleMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Returns a list of scheduled messages.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor For pagination purposes, this is the `cursor` value returned from a previous call to `chat.scheduledmessages.list` indicating where you want to start this call from.
     *     @var int $limit maximum number of original entries to return
     *     @var string $oldest A UNIX timestamp of the oldest value in the time range
     *     @var string $channel The channel of the scheduled messages
     *     @var string $latest A UNIX timestamp of the latest value in the time range
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200|\JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatScheduledMessagesList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatScheduledMessagesList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Provide custom unfurl behavior for user-posted URLs.
     *
     * @param array $formParameters {
     *
     *     @var string $user_auth_message Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
     *     @var bool $user_auth_required Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
     *     @var string $unfurls URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments
     *     @var string $ts timestamp of the message to add unfurl behavior to
     *     @var string $user_auth_url Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
     *     @var string $channel Channel ID of the message
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `links:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatUnfurlPostResponse200|\JoliCode\Slack\Api\Model\ChatUnfurlPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatUnfurl(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatUnfurl($formParameters, $headerParameters), $fetch);
    }

    /**
     * Updates a message.
     *
     * @param array $formParameters {
     *
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`.
     *     @var string $text New text for the message, using the [default formatting rules](/docs/formatting). It's not required when presenting `attachments`.
     *     @var string $ts timestamp of the message to be updated
     *     @var string $parse Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. See [below](#formatting).
     *     @var bool $as_user Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
     *     @var bool $link_names Find and link channel names and usernames. Defaults to `none`. See [below](#formatting).
     *     @var string $channel Channel containing the message to be updated.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200|\JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ChatUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Archives a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to archive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsArchivePostResponse200|\JoliCode\Slack\Api\Model\ConversationsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsArchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsArchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Closes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to close.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200|\JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsClose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsClose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Initiates a public or private channel-based conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $user_ids **Required** for workspace apps. A list of between 1 and 30 human users that will be added to the newly-created conversation. This argument has no effect when used by classic Slack apps.
     *     @var string $name Name of the public or private channel to create
     *     @var bool $is_private Create a private channel instead of a public one
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsCreatePostResponse200|\JoliCode\Slack\Api\Model\ConversationsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Fetches a conversation's history of messages and events.
     *
     * @param array $queryParameters {
     *
     *     @var bool $inclusive include messages with latest or oldest timestamp in results only when either timestamp is specified
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel conversation ID to fetch history for
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200|\JoliCode\Slack\Api\Model\ConversationsHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsHistory($queryParameters), $fetch);
    }

    /**
     * Retrieve information about a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_num_members Set to `true` to include the member count for the specified conversation. Defaults to `false`
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $channel Conversation ID to learn more about
     *     @var bool $include_locale Set this to `true` to receive the locale for this conversation. Defaults to `false`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsInfoGetResponse200|\JoliCode\Slack\Api\Model\ConversationsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsInfo($queryParameters), $fetch);
    }

    /**
     * Invites users to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $users A comma separated list of user IDs. Up to 30 users may be listed.
     *     @var string $channel The ID of the public or private channel to invite user(s) to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsInvitePostResponse200|\JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * Joins an existing conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to join
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200|\JoliCode\Slack\Api\Model\ConversationsJoinPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsJoin(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsJoin($formParameters, $headerParameters), $fetch);
    }

    /**
     * Removes a user from a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $user user ID to be removed
     *     @var string $channel ID of conversation to remove user from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsKickPostResponse200|\JoliCode\Slack\Api\Model\ConversationsKickPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsKick(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsKick($formParameters, $headerParameters), $fetch);
    }

    /**
     * Leaves a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to leave
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsLeavePostResponse200|\JoliCode\Slack\Api\Model\ConversationsLeavePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsLeave(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsLeave($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists all channels in a Slack team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsListGetResponse200|\JoliCode\Slack\Api\Model\ConversationsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsList($queryParameters), $fetch);
    }

    /**
     * Retrieve members of a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $channel ID of the conversation to retrieve members for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200|\JoliCode\Slack\Api\Model\ConversationsMembersGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsMembers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsMembers($queryParameters), $fetch);
    }

    /**
     * Opens or resumes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *
     *     @var bool $return_im boolean, indicates you want the full IM channel definition in the response
     *     @var string $users Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
     *     @var string $channel Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200|\JoliCode\Slack\Api\Model\ConversationsOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsOpen(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsOpen($formParameters, $headerParameters), $fetch);
    }

    /**
     * Renames a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $name new name for conversation
     *     @var string $channel ID of conversation to rename
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsRenamePostResponse200|\JoliCode\Slack\Api\Model\ConversationsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsRename(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsRename($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var bool $inclusive include messages with latest or oldest timestamp in results only when either timestamp is specified
     *     @var string $ts unique identifier of a thread's parent message
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel conversation ID to fetch thread from
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200|\JoliCode\Slack\Api\Model\ConversationsRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsReplies($queryParameters), $fetch);
    }

    /**
     * Sets the purpose for a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $purpose A new, specialer purpose
     *     @var string $channel Conversation to set the purpose of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponse200|\JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsSetPurpose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsSetPurpose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sets the topic for a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $topic The new topic string. Does not support formatting or linkification.
     *     @var string $channel Conversation to set the topic of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponse200|\JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsSetTopic(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsSetTopic($formParameters, $headerParameters), $fetch);
    }

    /**
     * Reverses conversation archival.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to unarchive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponse200|\JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsUnarchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsUnarchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DialogOpenGetResponse200|\JoliCode\Slack\Api\Model\DialogOpenGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dialogOpen(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DialogOpen(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndEndDndPostResponse200|\JoliCode\Slack\Api\Model\DndEndDndPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndEndDnd(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DndEndDnd(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200|\JoliCode\Slack\Api\Model\DndEndSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndEndSnooze(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DndEndSnooze(), $fetch);
    }

    /**
     * Retrieves a user's current Do Not Disturb status.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $user User to fetch status for (defaults to current user)
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndInfoGetResponse200|\JoliCode\Slack\Api\Model\DndInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DndInfo($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200|\JoliCode\Slack\Api\Model\DndSetSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndSetSnooze(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DndSetSnooze(), $fetch);
    }

    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $users Comma-separated list of users to fetch Do Not Disturb status for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200|\JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndTeamInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\DndTeamInfo($queryParameters), $fetch);
    }

    /**
     * Lists custom emoji for a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `emoji:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\EmojiListGetResponse200|\JoliCode\Slack\Api\Model\EmojiListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function emojiList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\EmojiList($queryParameters), $fetch);
    }

    /**
     * Deletes an existing comment on a file.
     *
     * @param array $formParameters {
     *
     *     @var string $id the comment to delete
     *     @var string $file File to delete a comment from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponse200|\JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesCommentsDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesCommentsDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a file.
     *
     * @param array $formParameters {
     *
     *     @var string $file ID of file to delete.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesDeletePostResponse200|\JoliCode\Slack\Api\Model\FilesDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets information about a team file.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $cursor Parameter for pagination. File comments are paginated for a single file. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection of comments. See [pagination](/docs/pagination) for more details.
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $file specify a file by providing its ID
     *     @var string $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesInfoGetResponse200|\JoliCode\Slack\Api\Model\FilesInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesInfo($queryParameters), $fetch);
    }

    /**
     * Lists & filters team files.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $channel filter files appearing in a specific channel, indicated by its ID
     *     @var string $ts_to filter files created before this timestamp (inclusive)
     *     @var string $ts_from filter files created after this timestamp (inclusive)
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $user filter files created by a single user
     *     @var string $page
     *     @var string $types Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesListGetResponse200|\JoliCode\Slack\Api\Model\FilesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesList($queryParameters), $fetch);
    }

    /**
     * Revokes public/external sharing access for a file.
     *
     * @param array $formParameters {
     *
     *     @var string $file File to revoke
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponse200|\JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRevokePublicURL(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesRevokePublicURL($formParameters, $headerParameters), $fetch);
    }

    /**
     * Enables a file for public/external sharing.
     *
     * @param array $formParameters {
     *
     *     @var string $file File to share
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponse200|\JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesSharedPublicURL(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesSharedPublicURL($formParameters, $headerParameters), $fetch);
    }

    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *
     *     @var string $channels comma-separated list of channel names or IDs where the file will be shared
     *     @var string $title title of file
     *     @var string $initial_comment the message text introducing the file in specified `channels`
     *     @var string $filetype a [file type](/types/file#file_types) identifier
     *     @var string $filename filename of file
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var string $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesUpload(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\FilesUpload($formParameters), $fetch);
    }

    /**
     * Archives a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Private channel to archive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsArchivePostResponse200|\JoliCode\Slack\Api\Model\GroupsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsArchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsArchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a private channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $validate whether to return errors on invalid channel name instead of modifying it to meet the specified criteria
     *     @var string $name Name of private channel to create
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsCreatePostResponse200|\JoliCode\Slack\Api\Model\GroupsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Clones and archives a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     *     @var string $channel Private channel to clone and archive.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsCreateChildPostResponse200|\JoliCode\Slack\Api\Model\GroupsCreateChildPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsCreateChild(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsCreateChild($formParameters), $fetch);
    }

    /**
     * Fetches history of messages and events from a private channel.
     *
     * @param array $queryParameters {
     *
     *     @var int $count number of messages to return, between 1 and 1000
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive include messages with latest or oldest timestamp in results
     *     @var string $token Authentication token. Requires scope: `groups:history`
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel private channel to fetch history for
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsHistoryGetResponse200|\JoliCode\Slack\Api\Model\GroupsHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsHistory($queryParameters), $fetch);
    }

    /**
     * Gets information about a private channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:read`
     *     @var bool $include_locale Set this to `true` to receive the locale for this group. Defaults to `false`
     *     @var string $channel Private channel to get info on
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsInfoGetResponse200|\JoliCode\Slack\Api\Model\GroupsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsInfo($queryParameters), $fetch);
    }

    /**
     * Invites a user to a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $user user to invite
     *     @var string $channel Private channel to invite user to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsInvitePostResponse200|\JoliCode\Slack\Api\Model\GroupsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * Removes a user from a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $user user to remove from private channel
     *     @var string $channel Private channel to remove user from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsKickPostResponse200|\JoliCode\Slack\Api\Model\GroupsKickPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsKick(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsKick($formParameters, $headerParameters), $fetch);
    }

    /**
     * Leaves a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Private channel to leave
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsLeavePostResponse200|\JoliCode\Slack\Api\Model\GroupsLeavePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsLeave(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsLeave($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists private channels that the calling user has access to.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var bool $exclude_members Exclude the `members` from each `group`
     *     @var string $token Authentication token. Requires scope: `groups:read`
     *     @var bool $exclude_archived don't return archived private channels
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsListGetResponse200|\JoliCode\Slack\Api\Model\GroupsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsList($queryParameters), $fetch);
    }

    /**
     * Sets the read cursor in a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $ts timestamp of the most recently seen message
     *     @var string $channel Private channel to set reading cursor in.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsMarkPostResponse200|\JoliCode\Slack\Api\Model\GroupsMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsMark(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsMark($formParameters, $headerParameters), $fetch);
    }

    /**
     * Opens a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Private channel to open.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsOpenPostResponse200|\JoliCode\Slack\Api\Model\GroupsOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsOpen(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsOpen($formParameters, $headerParameters), $fetch);
    }

    /**
     * Renames a private channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $validate whether to return errors on invalid channel name instead of modifying it to meet the specified criteria
     *     @var string $name new name for private channel
     *     @var string $channel Private channel to rename
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsRenamePostResponse200|\JoliCode\Slack\Api\Model\GroupsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsRename(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsRename($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a private channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $thread_ts Unique identifier of a thread's parent message
     *     @var string $token Authentication token. Requires scope: `groups:history`
     *     @var string $channel Private channel to fetch thread from
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsRepliesGetResponse200|\JoliCode\Slack\Api\Model\GroupsRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsReplies($queryParameters), $fetch);
    }

    /**
     * Sets the purpose for a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $purpose The new purpose
     *     @var string $channel Private channel to set the purpose of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsSetPurposePostResponse200|\JoliCode\Slack\Api\Model\GroupsSetPurposePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsSetPurpose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsSetPurpose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sets the topic for a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $topic The new topic
     *     @var string $channel Private channel to set the topic of
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsSetTopicPostResponse200|\JoliCode\Slack\Api\Model\GroupsSetTopicPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsSetTopic(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsSetTopic($formParameters, $headerParameters), $fetch);
    }

    /**
     * Unarchives a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Private channel to unarchive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `groups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\GroupsUnarchivePostResponse200|\JoliCode\Slack\Api\Model\GroupsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function groupsUnarchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\GroupsUnarchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImClosePostResponse200|\JoliCode\Slack\Api\Model\ImClosePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imClose(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImClose(), $fetch);
    }

    /**
     * Fetches history of messages and events from direct message channel.
     *
     * @param array $queryParameters {
     *
     *     @var int $count number of messages to return, between 1 and 1000
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive include messages with latest or oldest timestamp in results
     *     @var string $token Authentication token. Requires scope: `im:history`
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel direct message channel to fetch history for
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImHistoryGetResponse200|\JoliCode\Slack\Api\Model\ImHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImHistory($queryParameters), $fetch);
    }

    /**
     * Lists direct message channels for the calling user.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `im:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImListGetResponse200|\JoliCode\Slack\Api\Model\ImListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImList($queryParameters), $fetch);
    }

    /**
     * Sets the read cursor in a direct message channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel direct message channel to set reading cursor in
     *     @var string $ts Timestamp of the most recently seen message.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `im:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImMarkPostResponse200|\JoliCode\Slack\Api\Model\ImMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imMark(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImMark($formParameters, $headerParameters), $fetch);
    }

    /**
     * Opens a direct message channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $return_im boolean, indicates you want the full IM channel definition in the response
     *     @var string $user user to open a direct message channel with
     *     @var bool $include_locale Set this to `true` to receive the locale for this im. Defaults to `false`
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `im:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImOpenPostResponse200|\JoliCode\Slack\Api\Model\ImOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imOpen(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImOpen($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a direct message conversation.
     *
     * @param array $queryParameters {
     *
     *     @var string $thread_ts Unique identifier of a thread's parent message
     *     @var string $token Authentication token. Requires scope: `im:history`
     *     @var string $channel Direct message channel to fetch thread from
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ImRepliesGetResponse200|\JoliCode\Slack\Api\Model\ImRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function imReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ImReplies($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200|\JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function migrationExchange(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MigrationExchange(), $fetch);
    }

    /**
     * Closes a multiparty direct message channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel MPIM to close.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `mpim:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimClosePostResponse200|\JoliCode\Slack\Api\Model\MpimClosePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimClose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimClose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Fetches history of messages and events from a multiparty direct message.
     *
     * @param array $queryParameters {
     *
     *     @var int $count number of messages to return, between 1 and 1000
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive include messages with latest or oldest timestamp in results
     *     @var string $token Authentication token. Requires scope: `mpim:history`
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel multiparty direct message to fetch history for
     *     @var float $latest End of time range of messages to include in results.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimHistoryGetResponse200|\JoliCode\Slack\Api\Model\MpimHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimHistory($queryParameters), $fetch);
    }

    /**
     * Lists multiparty direct message channels for the calling user.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var string $token Authentication token. Requires scope: `mpim:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimListGetResponse200|\JoliCode\Slack\Api\Model\MpimListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimList($queryParameters), $fetch);
    }

    /**
     * Sets the read cursor in a multiparty direct message channel.
     *
     * @param array $formParameters {
     *
     *     @var string $ts timestamp of the most recently seen message
     *     @var string $channel multiparty direct message channel to set reading cursor in.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `mpim:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimMarkPostResponse200|\JoliCode\Slack\Api\Model\MpimMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimMark(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimMark($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method opens a multiparty direct message.
     *
     * @param array $formParameters {
     *
     *     @var string $users Comma separated lists of users.  The ordering of the users is preserved whenever a MPIM group is returned.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `mpim:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimOpenPostResponse200|\JoliCode\Slack\Api\Model\MpimOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimOpen(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimOpen($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a direct message conversation from a multiparty direct message.
     *
     * @param array $queryParameters {
     *
     *     @var string $thread_ts unique identifier of a thread's parent message
     *     @var string $token Authentication token. Requires scope: `mpim:history`
     *     @var string $channel Multiparty direct message channel to fetch thread from.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MpimRepliesGetResponse200|\JoliCode\Slack\Api\Model\MpimRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function mpimReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\MpimReplies($queryParameters), $fetch);
    }

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var string $redirect_uri this must match the originally submitted URI (if one was sent)
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret issued when you created your application
     *     @var bool $single_channel Request the user to add your app only to a single channel.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\OauthAccessGetResponse200|\JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function oauthAccess(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\OauthAccess($queryParameters), $fetch);
    }

    /**
     * Exchanges a temporary OAuth verifier code for a workspace token.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_secret issued when you created your application
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var bool $single_channel request the user to add your app only to a single channel
     *     @var string $client_id issued when you created your application
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\OauthTokenGetResponse200|\JoliCode\Slack\Api\Model\OauthTokenGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function oauthToken(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\OauthToken($queryParameters), $fetch);
    }

    /**
     * Pins an item to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $file_comment file comment to pin
     *     @var string $timestamp timestamp of the message to pin
     *     @var string $file file to pin
     *     @var string $channel Channel to pin the item in.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsAddPostResponse200|\JoliCode\Slack\Api\Model\PinsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\PinsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists items pinned to a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `pins:read`
     *     @var string $channel Channel to get pinned items for.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\PinsList($queryParameters), $fetch);
    }

    /**
     * Un-pins an item from a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $file_comment file comment to un-pin
     *     @var string $timestamp timestamp of the message to un-pin
     *     @var string $file file to un-pin
     *     @var string $channel Channel where the item is pinned to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsRemovePostResponse200|\JoliCode\Slack\Api\Model\PinsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\PinsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Adds a reaction to an item.
     *
     * @param array $formParameters {
     *
     *     @var string $name reaction (emoji) name
     *     @var string $file_comment File comment to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you'd expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead.
     *     @var string $timestamp timestamp of the message to add reaction to
     *     @var string $file File to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you'd expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead.
     *     @var string $channel Channel where the message to add reaction to was posted.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsAddPostResponse200|\JoliCode\Slack\Api\Model\ReactionsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets reactions for an item.
     *
     * @param array $queryParameters {
     *
     *     @var bool $full if true always return the complete reaction list
     *     @var string $file_comment file comment to get reactions for
     *     @var string $timestamp timestamp of the message to get reactions for
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     *     @var string $file file to get reactions for
     *     @var string $channel Channel where the message to get reactions for was posted.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsGet($queryParameters), $fetch);
    }

    /**
     * Lists reactions made by a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var bool $full if true always return the complete reaction list
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $user Show reactions made by this user. Defaults to the authed user.
     *     @var string $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsListGetResponse200|\JoliCode\Slack\Api\Model\ReactionsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsList($queryParameters), $fetch);
    }

    /**
     * Removes a reaction from an item.
     *
     * @param array $formParameters {
     *
     *     @var string $name reaction (emoji) name
     *     @var string $file_comment file comment to remove reaction from
     *     @var string $timestamp timestamp of the message to remove reaction from
     *     @var string $file file to remove reaction from
     *     @var string $channel Channel where the message to remove reaction from was posted.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsRemovePostResponse200|\JoliCode\Slack\Api\Model\ReactionsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a reminder.
     *
     * @param array $formParameters {
     *
     *     @var string $text The content of the reminder
     *     @var string $user The user who will receive the reminder. If no user is specified, the reminder will go to user who created it.
     *     @var string $time When this reminder should happen: the Unix timestamp (up to five years from now), the number of seconds until the reminder (if within 24 hours), or a natural language description (Ex. "in 15 minutes," or "every Thursday")
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersAddPostResponse200|\JoliCode\Slack\Api\Model\RemindersAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RemindersAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Marks a reminder as complete.
     *
     * @param array $formParameters {
     *
     *     @var string $reminder The ID of the reminder to be marked as complete
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersCompletePostResponse200|\JoliCode\Slack\Api\Model\RemindersCompletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersComplete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RemindersComplete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a reminder.
     *
     * @param array $formParameters {
     *
     *     @var string $reminder The ID of the reminder
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersDeletePostResponse200|\JoliCode\Slack\Api\Model\RemindersDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RemindersDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets information about a reminder.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     *     @var string $reminder The ID of the reminder
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersInfoGetResponse200|\JoliCode\Slack\Api\Model\RemindersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RemindersInfo($queryParameters), $fetch);
    }

    /**
     * Lists all reminders created by or for a given user.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersListGetResponse200|\JoliCode\Slack\Api\Model\RemindersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RemindersList($queryParameters), $fetch);
    }

    /**
     * Starts a Real Time Messaging session.
     *
     * @param array $queryParameters {
     *
     *     @var bool $presence_sub Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
     *     @var string $token Authentication token. Requires scope: `rtm:stream`
     *     @var bool $batch_presence_aware Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RtmConnectGetResponse200|\JoliCode\Slack\Api\Model\RtmConnectGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function rtmConnect(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\RtmConnect($queryParameters), $fetch);
    }

    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *
     *     @var string $sort_dir change sort direction to ascending (`asc`) or descending (`desc`)
     *     @var string $query search query
     *     @var string $sort return matches sorted by either `score` or `timestamp`
     *     @var string $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var string $token Authentication token. Requires scope: `search:read`
     *     @var bool $highlight pass a value of `true` to enable query highlight markers (see below)
     *     @var string $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\SearchMessagesGetResponse200|\JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function searchMessages(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\SearchMessages($queryParameters), $fetch);
    }

    /**
     * Adds a star to an item.
     *
     * @param array $formParameters {
     *
     *     @var string $file_comment file comment to add star to
     *     @var string $timestamp timestamp of the message to add star to
     *     @var string $channel channel to add star to, or channel where the message to add star to was posted (used with `timestamp`)
     *     @var string $file File to add star to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsAddPostResponse200|\JoliCode\Slack\Api\Model\StarsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\StarsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists stars for a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var string $token Authentication token. Requires scope: `stars:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsListGetResponse200|\JoliCode\Slack\Api\Model\StarsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\StarsList($queryParameters), $fetch);
    }

    /**
     * Removes a star from an item.
     *
     * @param array $formParameters {
     *
     *     @var string $file_comment file comment to remove star from
     *     @var string $timestamp timestamp of the message to remove star from
     *     @var string $channel channel to remove star from, or channel where the message to remove star from was posted (used with `timestamp`)
     *     @var string $file File to remove star from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsRemovePostResponse200|\JoliCode\Slack\Api\Model\StarsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\StarsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets the access logs for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $page
     *     @var int $before End of time range of logs to include in results (inclusive).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200|\JoliCode\Slack\Api\Model\TeamAccessLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamAccessLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\TeamAccessLogs($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponse200|\JoliCode\Slack\Api\Model\TeamBillableInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamBillableInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\TeamBillableInfo(), $fetch);
    }

    /**
     * Gets information about the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `team:read`
     *     @var string $team Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamInfoGetResponse200|\JoliCode\Slack\Api\Model\TeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\TeamInfo($queryParameters), $fetch);
    }

    /**
     * Gets the integration logs for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $change_type Filter logs with this change type. Defaults to all logs.
     *     @var int $app_id Filter logs to this Slack app. Defaults to all logs.
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $user Filter logs generated by this user???s actions. Defaults to all logs.
     *     @var int $service_id Filter logs to this service. Defaults to all logs.
     *     @var string $page
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200|\JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamIntegrationLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\TeamIntegrationLogs($queryParameters), $fetch);
    }

    /**
     * Retrieve a team's profile.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var string $visibility Filter by visibility.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200|\JoliCode\Slack\Api\Model\TeamProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamProfileGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\TeamProfileGet($queryParameters), $fetch);
    }

    /**
     * Create a User Group.
     *
     * @param array $formParameters {
     *
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var string $description a short description of the User Group
     *     @var string $channels a comma separated string of encoded channel IDs for which the User Group uses as a default
     *     @var bool $include_count include the number of users in each User Group
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Disable an existing User Group.
     *
     * @param array $formParameters {
     *
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup The encoded ID of the User Group to disable.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsDisablePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsDisable(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsDisable($formParameters, $headerParameters), $fetch);
    }

    /**
     * Enable a User Group.
     *
     * @param array $formParameters {
     *
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup The encoded ID of the User Group to enable.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsEnablePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsEnable(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsEnable($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all User Groups for a team.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_users include the list of users for each User Group
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     *     @var bool $include_count include the number of users in each User Group
     *     @var bool $include_disabled Include disabled User Groups.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsListGetResponse200|\JoliCode\Slack\Api\Model\UsergroupsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsList($queryParameters), $fetch);
    }

    /**
     * Update an existing User Group.
     *
     * @param array $formParameters {
     *
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var string $description a short description of the User Group
     *     @var string $channels a comma separated string of encoded channel IDs for which the User Group uses as a default
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup the encoded ID of the User Group to update
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all users in a User Group.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     *     @var bool $include_disabled allow results that involve disabled User Groups
     *     @var string $usergroup The encoded ID of the User Group to read.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponse200|\JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUsersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUsersList($queryParameters), $fetch);
    }

    /**
     * Update the list of users for a User Group.
     *
     * @param array $formParameters {
     *
     *     @var string $users a comma separated string of encoded user IDs that represent the entire list of users for the User Group
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup The encoded ID of the User Group to update.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUsersUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUsersUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * List conversations the calling user may access.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var string $user Browse conversations by a specific user ID's membership. Non-public channels are restricted to those where the calling user shares membership.
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200|\JoliCode\Slack\Api\Model\UsersConversationsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersConversations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersConversations($queryParameters), $fetch);
    }

    /**
     * Delete the user profile photo.
     *
     * @param array $formParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersDeletePhoto(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersDeletePhoto($formParameters), $fetch);
    }

    /**
     * Gets user presence information.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $user User to get presence info on. Defaults to the authed user.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200|\JoliCode\Slack\Api\Model\UsersGetPresenceGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersGetPresence(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersGetPresence($queryParameters), $fetch);
    }

    /**
     * Get a user's identity.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `identity.basic`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersIdentityGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersIdentity(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersIdentity($queryParameters), $fetch);
    }

    /**
     * Gets information about a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $user User to get info on
     *     @var bool $include_locale Set this to `true` to receive the locale for this user. Defaults to `false`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersInfoGetResponse200|\JoliCode\Slack\Api\Model\UsersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersInfo($queryParameters), $fetch);
    }

    /**
     * Lists all users in a Slack team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var bool $include_locale Set this to `true` to receive the locale for users. Defaults to `false`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersListGetResponse200|\JoliCode\Slack\Api\Model\UsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersList($queryParameters), $fetch);
    }

    /**
     * Find a user with an email address.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:read.email`
     *     @var string $email An email address belonging to a user in the workspace
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponse200|\JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersLookupByEmail(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersLookupByEmail($queryParameters), $fetch);
    }

    /**
     * Retrieves a user's profile information.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var bool $include_labels Include labels for each ID in custom profile fields
     *     @var string $user User to retrieve profile info for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersProfileGetGetResponse200|\JoliCode\Slack\Api\Model\UsersProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersProfileGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersProfileGet($queryParameters), $fetch);
    }

    /**
     * Set the profile information for a user.
     *
     * @param array $formParameters {
     *
     *     @var string $profile Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters.
     *     @var string $user ID of user to change. This argument may only be specified by team admins on paid teams.
     *     @var string $value Value to set a single key to. Usable only if `profile` is not passed.
     *     @var string $name Name of a single key to set. Usable only if `profile` is not passed.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200|\JoliCode\Slack\Api\Model\UsersProfileSetPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersProfileSet(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersProfileSet($formParameters, $headerParameters), $fetch);
    }

    /**
     * Marked a user as active. Deprecated and non-functional.
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetActivePostResponse200|\JoliCode\Slack\Api\Model\UsersSetActivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetActive(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetActive($headerParameters), $fetch);
    }

    /**
     * Set the user profile photo.
     *
     * @param array $formParameters {
     *
     *     @var string $image file contents via `multipart/form-data`
     *     @var int $crop_w Width/height of crop box (always square)
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     *     @var int $crop_y Y coordinate of top-left corner of crop box
     *     @var int $crop_x X coordinate of top-left corner of crop box
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetPhoto(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetPhoto($formParameters), $fetch);
    }

    /**
     * Manually sets user presence.
     *
     * @param array $formParameters {
     *
     *     @var string $presence Either `auto` or `away`
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetPresencePostResponse200|\JoliCode\Slack\Api\Model\UsersSetPresencePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetPresence(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetPresence($formParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://slack.com/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \JoliCode\Slack\Api\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
