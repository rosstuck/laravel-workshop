<?php
namespace App\Http\Controllers;

use App\Adoption\Cat;
use Doctrine\ORM\EntityManager;

/**
 *
 */
class WorkshopController extends Controller
{
    public function start(EntityManager $em)
    {
        return view('workshop.test');
    }
}
