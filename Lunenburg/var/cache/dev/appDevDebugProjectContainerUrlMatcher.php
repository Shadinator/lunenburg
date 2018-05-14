<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/artikel')) {
            // artikel_index
            if ('/artikel' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::indexAction',  '_route' => 'artikel_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_artikel_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'artikel_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_artikel_index;
                }

                return $ret;
            }
            not_artikel_index:

            // artikel_new
            if ('/artikel/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::newAction',  '_route' => 'artikel_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_artikel_new;
                }

                return $ret;
            }
            not_artikel_new:

            // artikel_show
            if (preg_match('#^/artikel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'artikel_show')), array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_artikel_show;
                }

                return $ret;
            }
            not_artikel_show:

            // artikel_edit
            if (preg_match('#^/artikel/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'artikel_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_artikel_edit;
                }

                return $ret;
            }
            not_artikel_edit:

            // artikel_delete
            if (preg_match('#^/artikel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'artikel_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArtikelController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_artikel_delete;
                }

                return $ret;
            }
            not_artikel_delete:

        }

        elseif (0 === strpos($pathinfo, '/bestelorder')) {
            // bestelorder_index
            if ('/bestelorder' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\BestelorderController::indexAction',  '_route' => 'bestelorder_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_bestelorder_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'bestelorder_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_bestelorder_index;
                }

                return $ret;
            }
            not_bestelorder_index:

            // bestelorder_new
            if ('/bestelorder/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\BestelorderController::newAction',  '_route' => 'bestelorder_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_bestelorder_new;
                }

                return $ret;
            }
            not_bestelorder_new:

            // bestelorder_show
            if (preg_match('#^/bestelorder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'bestelorder_show')), array (  '_controller' => 'AppBundle\\Controller\\BestelorderController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_bestelorder_show;
                }

                return $ret;
            }
            not_bestelorder_show:

            // bestelorder_edit
            if (preg_match('#^/bestelorder/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'bestelorder_edit')), array (  '_controller' => 'AppBundle\\Controller\\BestelorderController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_bestelorder_edit;
                }

                return $ret;
            }
            not_bestelorder_edit:

            // bestelorder_delete
            if (preg_match('#^/bestelorder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'bestelorder_delete')), array (  '_controller' => 'AppBundle\\Controller\\BestelorderController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_bestelorder_delete;
                }

                return $ret;
            }
            not_bestelorder_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/goederen')) {
            // goederen_index
            if ('/goederen' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\GoederenController::indexAction',  '_route' => 'goederen_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_goederen_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'goederen_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_goederen_index;
                }

                return $ret;
            }
            not_goederen_index:

            // goederen_new
            if ('/goederen/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\GoederenController::newAction',  '_route' => 'goederen_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_goederen_new;
                }

                return $ret;
            }
            not_goederen_new:

            // goederen_show
            if (preg_match('#^/goederen/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'goederen_show')), array (  '_controller' => 'AppBundle\\Controller\\GoederenController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_goederen_show;
                }

                return $ret;
            }
            not_goederen_show:

            // goederen_edit
            if (preg_match('#^/goederen/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'goederen_edit')), array (  '_controller' => 'AppBundle\\Controller\\GoederenController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_goederen_edit;
                }

                return $ret;
            }
            not_goederen_edit:

            // goederen_delete
            if (preg_match('#^/goederen/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'goederen_delete')), array (  '_controller' => 'AppBundle\\Controller\\GoederenController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_goederen_delete;
                }

                return $ret;
            }
            not_goederen_delete:

        }

        elseif (0 === strpos($pathinfo, '/leverancier')) {
            // leverancier_index
            if ('/leverancier' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\LeverancierController::indexAction',  '_route' => 'leverancier_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_leverancier_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'leverancier_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_leverancier_index;
                }

                return $ret;
            }
            not_leverancier_index:

            // leverancier_new
            if ('/leverancier/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\LeverancierController::newAction',  '_route' => 'leverancier_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_leverancier_new;
                }

                return $ret;
            }
            not_leverancier_new:

            // leverancier_show
            if (preg_match('#^/leverancier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'leverancier_show')), array (  '_controller' => 'AppBundle\\Controller\\LeverancierController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_leverancier_show;
                }

                return $ret;
            }
            not_leverancier_show:

            // leverancier_edit
            if (preg_match('#^/leverancier/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'leverancier_edit')), array (  '_controller' => 'AppBundle\\Controller\\LeverancierController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_leverancier_edit;
                }

                return $ret;
            }
            not_leverancier_edit:

            // leverancier_delete
            if (preg_match('#^/leverancier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'leverancier_delete')), array (  '_controller' => 'AppBundle\\Controller\\LeverancierController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_leverancier_delete;
                }

                return $ret;
            }
            not_leverancier_delete:

        }

        elseif (0 === strpos($pathinfo, '/magazijn')) {
            // magazijn_index
            if ('/magazijn' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\MagazijnController::indexAction',  '_route' => 'magazijn_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_magazijn_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'magazijn_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_magazijn_index;
                }

                return $ret;
            }
            not_magazijn_index:

            // magazijn_new
            if ('/magazijn/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\MagazijnController::newAction',  '_route' => 'magazijn_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_magazijn_new;
                }

                return $ret;
            }
            not_magazijn_new:

            // magazijn_show
            if (preg_match('#^/magazijn/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'magazijn_show')), array (  '_controller' => 'AppBundle\\Controller\\MagazijnController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_magazijn_show;
                }

                return $ret;
            }
            not_magazijn_show:

            // magazijn_edit
            if (preg_match('#^/magazijn/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'magazijn_edit')), array (  '_controller' => 'AppBundle\\Controller\\MagazijnController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_magazijn_edit;
                }

                return $ret;
            }
            not_magazijn_edit:

            // magazijn_delete
            if (preg_match('#^/magazijn/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'magazijn_delete')), array (  '_controller' => 'AppBundle\\Controller\\MagazijnController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_magazijn_delete;
                }

                return $ret;
            }
            not_magazijn_delete:

        }

        elseif (0 === strpos($pathinfo, '/status')) {
            // status_index
            if ('/status' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\StatusController::indexAction',  '_route' => 'status_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_status_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'status_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_status_index;
                }

                return $ret;
            }
            not_status_index:

            // status_new
            if ('/status/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\StatusController::newAction',  '_route' => 'status_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_status_new;
                }

                return $ret;
            }
            not_status_new:

            // status_show
            if (preg_match('#^/status/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_show')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_status_show;
                }

                return $ret;
            }
            not_status_show:

            // status_edit
            if (preg_match('#^/status/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_edit')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_status_edit;
                }

                return $ret;
            }
            not_status_edit:

            // status_delete
            if (preg_match('#^/status/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_delete')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_status_delete;
                }

                return $ret;
            }
            not_status_delete:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
