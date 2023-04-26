<?php
class Connection
{
    public $Conn;
    public $Reducer;
    public $Datas = null;

    public function __construct()
    {
        $this->Conn = new SQLite3("../data.db");
    }

    public function dispatch(callable $func = null)
    {
        try {
            $this->Datas = $func($this->Conn);
        } catch (Exception $e) {
            error_log($e->getMessage());
            $this->Datas = null;
        }
        $this->Conn->close();
        return $this->Datas;
    }
}
