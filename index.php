<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    <form method="post">
        <input type="text" name="test">
    </form>
</body>
</html>
<?php
var_dump($POST);
class LinkStoreSystem
{
    private $i = '';
    private $error = '';

    public function __construct()
    {
        $this->i = $POST;
        if (!$this->i)
            $this->i = $GET;

        if (!$this->i['link'] || !$this->i['code'])
        {
            $this->error = 'no link or code!';
            return false;
        }
    }

    // save link
    public function saveLink()
    {
        if ($this->i['link'])
        {
            // save link
            return $this->genCode();
        }
    }

    // gen code
    public function genCode()
    {

    }

    // get link by code
    public function getLink()
    {
        if ($this->i['code'])
        {
            // find link
            return $link;
        }
    }
}
