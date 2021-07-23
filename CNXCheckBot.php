<?

class CNXCheckBot {
    private $ref;
    private $check;
    private $cookie;
    private $arBadLinks = ['my.mail.ru', 't.co', 'yandex.ru/images', /*'polyplast.loc',*/'facebook.com', ''];

    function __construct(){
        $this->ref = $_SERVER['HTTP_REFERER'];
        $this->cookie = $_COOKIE;
        if($this->isRefererEmpty() || $this->checkBadLinks() || $this->checkCookie()) $this->check = true;
        else $this->check = false;
    }

    private function isRefererEmpty(){
        return $this->ref == '';
    }

    private function checkCookie(){
        return empty($this->cookie);
    }

    private function checkBadLinks(){
        foreach ($this->arBadLinks as $link) {
            if(strpos( $this->ref, $link) !== false){
                return true;
            }
        }
        return false;
    }

    public function Check() {
        return $this->check;
    }
}