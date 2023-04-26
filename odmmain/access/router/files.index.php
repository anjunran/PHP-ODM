<?php
class routeNodes
{
    protected $PAGE;
    protected $ROUTE;

    public $filesindex = [];


    public function __construct(...$routes)
    {
        foreach ($routes as $route) {
            $this->filesindex[] = $route;
        }
    }

    public static function Route(string $keyRoute, callable $file): array
    {
        $node = [];
        $keyRoute = explode("/", $keyRoute);
        $node[$keyRoute[1]] = $file();
        return $node;
    }

    public function setRouter(string $page, callable $errorpage): array
    {
        $this->PAGE = $page;
        $this->ROUTE = array_filter($this->filesindex, function ($route) {
            return array_key_exists($this->PAGE, $route);
        });

        if (!empty($this->ROUTE)) {
            return $this->ROUTE;
        } else {
            return [
                array(
                    $page => $errorpage()
                )
            ];
        }
    }
}
