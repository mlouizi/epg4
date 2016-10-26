<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // eplugg_back_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin(?:(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_back_homepage')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::adminAction',  'trailingSlash' => '/',));
        }

        // eplugg_back_users
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/users(?:(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_back_users')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::usersAction',  'trailingSlash' => '/',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // eplugg_delete_user
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_delete_user')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::userDeleteAction',  'trailingSlash' => '/',));
                }

                // eplugg_block_user
                if (0 === strpos($pathinfo, '/admin/user/block') && preg_match('#^/admin/user/block/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_block_user')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::userBlockAction',  'trailingSlash' => '/',));
                }

                // eplugg_activate_user
                if (0 === strpos($pathinfo, '/admin/user/activate') && preg_match('#^/admin/user/activate/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_activate_user')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::userActivateAction',  'trailingSlash' => '/',));
                }

                // eplugg_edit_user
                if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_edit_user')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::userEditAction',  'trailingSlash' => '/',));
                }

                // eplugg_add_user
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::userAddAction',  'trailingSlash' => '/',  '_route' => 'eplugg_add_user',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/page')) {
                // eplugg_edit_page
                if (preg_match('#^/admin/page/(?P<pid>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_edit_page')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pageEditAction',  'trailingSlash' => '/',));
                }

                // eplugg_add_page
                if ($pathinfo === '/admin/page/add') {
                    return array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pageAddAction',  'trailingSlash' => '/',  '_route' => 'eplugg_add_page',);
                }

                // eplugg_delete_page
                if (preg_match('#^/admin/page/(?P<pid>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_delete_page')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pageDeleteAction',  'trailingSlash' => '/',));
                }

                // eplugg_unpublish_page
                if (preg_match('#^/admin/page/(?P<pid>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_unpublish_page')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pageUnpublishAction',  'trailingSlash' => '/',));
                }

                // eplugg_publish_page
                if (preg_match('#^/admin/page/(?P<pid>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_publish_page')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pagepublishAction',  'trailingSlash' => '/',));
                }

                // eplugg_back_pages
                if (0 === strpos($pathinfo, '/admin/pages') && preg_match('#^/admin/pages(?:(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_back_pages')), array (  '_controller' => 'Eplugg\\BackBundle\\Controller\\DefaultController::pagesAction',  'trailingSlash' => '/',));
                }

            }

        }

        // eplugg_front_homepage_no_local
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eplugg_front_homepage_no_local');
            }

            return array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  'trailingSlash' => '/',  '_route' => 'eplugg_front_homepage_no_local',);
        }

        // eplugg_front_homepage
        if (preg_match('#^/(?P<_locale>fr|en)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_front_homepage')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::indexAction',  'trailingSlash' => '/',));
        }

        // eplugg_front_checkmail
        if (preg_match('#^/(?P<_locale>fr|en)/checkmail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_front_checkmail')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::checkMailAction',  'trailingSlash' => '/',));
        }

        // eplug_signup_step2
        if (preg_match('#^/(?P<_locale>fr|en)/signup_step2$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplug_signup_step2')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::signupStepTwoAction',  'trailingSlash' => '/',));
        }

        // eplugg_front_page
        if (preg_match('#^/(?P<_locale>fr|en)/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_front_page')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::pageDisplayAction',  'trailingSlash' => '/',));
        }

        // eplugg_edit_profile
        if (preg_match('#^/(?P<_locale>fr|en)/profile/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_edit_profile')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::editProfileAction',  'trailingSlash' => '/',));
        }

        // eplugg_profile_page
        if (preg_match('#^/(?P<_locale>fr|en)/profile/(?P<uid>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_profile_page')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::profileAction',  'trailingSlash' => '/',));
        }

        // eplugg_invite_user
        if (preg_match('#^/(?P<_locale>fr|en)/profile/addfriend/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_invite_user')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::addFriendAction',  'trailingSlash' => '/',));
        }

        // eplugg_invitations
        if (preg_match('#^/(?P<_locale>fr|en)/invitations$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_invitations')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::invitationsAction',  'trailingSlash' => '/',));
        }

        // eplugg_cancel_invitation
        if (preg_match('#^/(?P<_locale>fr|en)/profile/cancelfriend/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_cancel_invitation')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::cancelFriendAction',  'trailingSlash' => '/',));
        }

        // eplugg_accpet_invitation
        if (preg_match('#^/(?P<_locale>fr|en)/profile/acceptfriend/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_accpet_invitation')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::acceptFriendAction',  'trailingSlash' => '/',));
        }

        // eplugg_delete_friend
        if (preg_match('#^/(?P<_locale>fr|en)/profile/deletefriend/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_delete_friend')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::deleteFriendAction',  'trailingSlash' => '/',));
        }

        // eplugg_upload_cv
        if (preg_match('#^/(?P<_locale>fr|en)/profile/upload_cv$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_upload_cv')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::uploadCvAction',  'trailingSlash' => '/',));
        }

        // eplugg_add_experience
        if (preg_match('#^/(?P<_locale>fr|en)/profile/add_experience$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_add_experience')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::addExperienceAction',  'trailingSlash' => '/',));
        }

        // eplugg_edit_experience
        if (preg_match('#^/(?P<_locale>fr|en)/profile/edit_experience/(?P<eid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_edit_experience')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::editExperienceAction',  'trailingSlash' => '/',));
        }

        // eplugg_delete_experience
        if (preg_match('#^/(?P<_locale>fr|en)/profile/delete_experience/(?P<eid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_delete_experience')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::deleteExperienceAction',  'trailingSlash' => '/',));
        }

        // eplugg_upload_avatar
        if (preg_match('#^/(?P<_locale>fr|en)/profile/upload_avatar/(?P<avatarType>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_upload_avatar')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DefaultController::UploadAvatarAction',  'trailingSlash' => '/',));
        }

        // eplugg_messages
        if (preg_match('#^/(?P<_locale>fr|en)/messages$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_messages')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::MessagesAction',  'trailingSlash' => '/',));
        }

        // eplugg_messages_user
        if (preg_match('#^/(?P<_locale>fr|en)/messages/(?P<uid>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_messages_user')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::MessagesAction',  'trailingSlash' => '/',));
        }

        // eplugg_messages_user_search
        if (preg_match('#^/(?P<_locale>fr|en)/messages/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_messages_user_search')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::MessagesSearchAction',  'trailingSlash' => '/',));
        }

        // eplugg_suggest_user
        if (preg_match('#^/(?P<_locale>fr|en)/suggest/user/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_suggest_user')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SuggestionController::SuggestUserAction',  'trailingSlash' => '/',));
        }

        // eplugg_suggest_users
        if (preg_match('#^/(?P<_locale>fr|en)/suggest/users/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_suggest_users')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SuggestionController::SuggestGetUsersAction',  'trailingSlash' => '/',));
        }

        // eplugg_suggest_page_auto
        if (preg_match('#^/(?P<_locale>fr|en)/call\\-suggestions$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_suggest_page_auto')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SuggestionController::SuggestedUsersAction',  'trailingSlash' => '/',));
        }

        // eplugg_ignore_user
        if (preg_match('#^/(?P<_locale>fr|en)/ignore/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_ignore_user')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SuggestionController::IgnoreUserAction',  'trailingSlash' => '/',));
        }

        // eplugg_all_users
        if (preg_match('#^/(?P<_locale>fr|en)/eplugg$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_all_users')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SearchController::AllUsersAction',  'trailingSlash' => '/',));
        }

        // search_users
        if (preg_match('#^/(?P<_locale>fr|en)/search_users$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_users')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SearchController::SearchUsersAction',  'trailingSlash' => '/',));
        }

        // search_users_page
        if (preg_match('#^/(?P<_locale>fr|en)/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_users_page')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SearchController::SearchUsersPageAction',  'trailingSlash' => '/',));
        }

        // directory
        if (preg_match('#^/(?P<_locale>fr|en)/directory$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'directory')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\DirectoryController::DirectoryAction',  'trailingSlash' => '/',));
        }

        // post_add
        if (preg_match('#^/(?P<_locale>fr|en)/post$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_add')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::NewPostAction',  'trailingSlash' => '/',));
        }

        // post_show
        if (preg_match('#^/(?P<_locale>fr|en)/post/show/(?P<idpost>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::showPostAction',  'trailingSlash' => '/',));
        }

        // post_delete
        if (preg_match('#^/(?P<_locale>fr|en)/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::deletePostAction',  'trailingSlash' => '/',));
        }

        // comment_delete
        if (preg_match('#^/(?P<_locale>fr|en)/comment/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::deleteCommentAjaxAction',  'trailingSlash' => '/',));
        }

        // comment_add_ajax
        if (preg_match('#^/(?P<_locale>fr|en)/comment/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_add_ajax')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::createCommentAjaxAction',  'trailingSlash' => '/',));
        }

        // eplugg_calendar
        if (preg_match('#^/(?P<_locale>fr|en)/calendar$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_calendar')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\CalendarController::CalendarAction',  'trailingSlash' => '/',));
        }

        // eplugg_add_event
        if (preg_match('#^/(?P<_locale>fr|en)/add_event$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_add_event')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\CalendarController::AddEventAction',  'trailingSlash' => '/',));
        }

        // post_share
        if (preg_match('#^/(?P<_locale>fr|en)/post/share/(?P<idpost>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_share')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::sharePostAction',  'trailingSlash' => '/',));
        }

        // post_like
        if (preg_match('#^/(?P<_locale>fr|en)/post/like$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_like')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::LikePostAjaxAction',  'trailingSlash' => '/',));
        }

        // post_dislike
        if (preg_match('#^/(?P<_locale>fr|en)/post/dislike$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_dislike')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\PostController::dislikePostAjaxAction',  'trailingSlash' => '/',));
        }

        // eplugg_common_firends
        if (preg_match('#^/(?P<_locale>fr|en)/common\\-friends/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_common_firends')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\SearchController::commomFriendsAction',  'trailingSlash' => '/',));
        }

        // eplugg_mapclic
        if (preg_match('#^/(?P<_locale>fr|en)/mapclic/members$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_mapclic')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MapclicController::mapclicAction',  'trailingSlash' => '/',));
        }

        // eplugg_xml_events
        if (preg_match('#^/(?P<_locale>fr|en)/events/xml$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_xml_events')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\CalendarController::xmlEventsAction',  'trailingSlash' => '/',));
        }

        // search_users_by_activity
        if (preg_match('#^/(?P<_locale>fr|en)/activity/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_users_by_activity')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\ActivityController::searchUserByActivityAction',  'trailingSlash' => '/',));
        }

        // search_all_users_activities
        if (preg_match('#^/(?P<_locale>fr|en)/activity/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_all_users_activities')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\ActivityController::UsersActivitiesAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_get_users
        if (preg_match('#^/(?P<_locale>fr|en)/chat/users$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_get_users')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::usersChatAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_update_my_status
        if (preg_match('#^/(?P<_locale>fr|en)/chat/updatemystatus$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_update_my_status')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::updateMyStatusAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_get_msg_box
        if (preg_match('#^/(?P<_locale>fr|en)/chat/getmsgbox$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_get_msg_box')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::getMsgBoxAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_refresh_timer_status
        if (preg_match('#^/(?P<_locale>fr|en)/chat/refreshtimerandstatus$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_refresh_timer_status')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::refreshTimerAndStatusAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_reload_Messages
        if (preg_match('#^/(?P<_locale>fr|en)/chat/reloadmessages$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_reload_Messages')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::reloadMessagesAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_send_message
        if (preg_match('#^/(?P<_locale>fr|en)/chat/sendmessage$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_send_message')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::sendMessageAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_read_approved
        if (preg_match('#^/(?P<_locale>fr|en)/chat/readapproved$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_read_approved')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::readApprovedAction',  'trailingSlash' => '/',));
        }

        // eplugg_chat_search_friend
        if (preg_match('#^/(?P<_locale>fr|en)/chat/searchfriend$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_chat_search_friend')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\MessagesController::searchFriendAction',  'trailingSlash' => '/',));
        }

        // eplugg_localize
        if (preg_match('#^/(?P<_locale>fr|en)/localize$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_localize')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\LocalizationController::mapLocalizationAction',  'trailingSlash' => '/',));
        }

        // eplugg_update_coordinations
        if (preg_match('#^/(?P<_locale>fr|en)/update_coordinations$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eplugg_update_coordinations')), array (  '_controller' => 'Eplugg\\FrontBundle\\Controller\\LocalizationController::updateCoordinationsAction',  'trailingSlash' => '/',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>fr|en)/login$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>fr|en)/login_check$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>fr|en)/logout$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_security_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>fr|en)/profile/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'fr',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>fr|en)/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_profile_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'fr',));
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>fr|en)/register/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'Eplugg\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>fr|en)/register/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'Eplugg\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>fr|en)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Eplugg\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>fr|en)/register/confirmed$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'Eplugg\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/request$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>fr|en)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'Eplugg\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'fr',));
        }
        not_fos_user_change_password:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
