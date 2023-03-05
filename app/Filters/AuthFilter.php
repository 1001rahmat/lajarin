<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = service('session');

        // Check if the user is logged in
        if (!$session->has('isLogin') || $session->get('isLogin') == NULL) {

            //if URL has two segment, get current controller and method
            if ($request->uri->getTotalSegments() >= 2) {
                $currentController = $request->uri->getSegment(1);
                $currentMethod = $request->uri->getSegment(2);
                $red = $currentController . '/' . $currentMethod;
                return redirect()->to(base_url('auth/login?' . 'red=' . $red));
            } elseif ($request->uri->getTotalSegments() >= 1 and $request->uri->getTotalSegments() < 2) {
                $currentController = $request->uri->getSegment(1);
                $currentMethod = '';
                $red = $currentController;
                return redirect()->to(base_url('auth/login?' . 'red=' . $red));
            } elseif ($request->uri->getTotalSegments() == 0) {
                $currentController = '';
                $currentMethod = '';
                return redirect()->to(base_url('auth/login'));
            }
        }

        return $session->get('isLogin');
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
