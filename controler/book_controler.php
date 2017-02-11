<?php class bookControler
{
    public function process()
    {
        require_once ('./model/book_module.php');
        $books = new bookModule();
        $books->init();
        if(!empty($_GET['act']))
            $act = $_GET['act'];
        else
            $act="";
        switch ($act) {
            case 'list':
                $result = $books->format_list_html();
                break;
            case 'item':
                $result = $books->fomat_item_html();
                break;
            case 'data':
                $result = $books->read_save_data_curl();
                break;
            case 'data-form':
                $result = $books->format_data_form();
                break;
            default:
                $result = $books->format_list_html();
        }
        return $result;
    }
}
?>