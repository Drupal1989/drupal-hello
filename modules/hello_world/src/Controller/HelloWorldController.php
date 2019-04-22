<?php
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
*Controller for salutation message..
*/
class HelloWorldController extends ControllerBase {
  /**
  * @var \Drupal\hello_world\HelloWorldSalutation
  */
  protected $salutation;
  /**
  * HelloWorldController constructor..
  * @param \Drupal\hello_world\HelloWorldSalutation $salutation
  */

  public function _construct(HelloWorldSalutation $salutation) {
    $this->salutation = $salutation;
  }

  /**
  * {@inheritdoc}
  */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('hello_world.salutation')
    );
  }

  /**Hello World.
  *@return HttpQueryString
  */
  public function helloWorld() {
    return [
      '#markup' => $this->salutation->getSalutation()
    ];
  }
}

 ?>
