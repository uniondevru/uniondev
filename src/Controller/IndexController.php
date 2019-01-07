<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;

/**
 * Index Controller
 */
class IndexController extends Controller
{
  public function index()
  {
    return $this->json([
      'title' => 'Welcome to UnionDev Skeleton',
      'msg' => 'This is Rest API APP'
    ]);
  }
}
