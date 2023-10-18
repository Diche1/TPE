<?php

require_once(PATH . '/libs/smarty/Smarty.class.php');
class motorView
{
    private $tpl;
    function __construct()
    {
        $this->tpl = new Smarty;
        $this->tpl->assign('BASE_URL', BASE_URL);

    }
    /*function showArticles($articles)
    {
        $this->tpl->assign('logged', $_SESSION['logged']);
        $this->tpl->assign('articles', $articles);
        $this->tpl->display(PATH . '/tpl/showArticles.tpl');
    }
    function showCategories($categories)
    {
        $this->tpl->assign('logged', $_SESSION['logged']);
        $this->tpl->assign('categories', $categories);
        $this->tpl->display(PATH . '/tpl/showCategories.tpl');
    }
    function showItemDetails($details)
    {
        $this->tpl->assign('details', $details);
        $this->tpl->display(PATH . '/tpl/showItemDetails.tpl');
    }*/

    function showHome(){
        //$this->tpl->assign('logged', $_SESSION['logged']);
        $this->templete->display(PATH . '/templates/showHome.tpl');
    }

   /* function showArticlesEditForm($id,$article,$categories)
    {
        $this->tpl->assign('id', $id);
        $this->tpl->assign('item', $article[0]);
        $this->tpl->assign('categorias', $categories);
        $this->tpl->display(PATH . '/tpl/formEditArticles.tpl');
    }
    function showCategoriesEditForm($id,$categoria)
    {
        $this->tpl->assign('id', $id);
        $this->tpl->assign('item', $categoria);
        $this->tpl->display(PATH . '/tpl/formEditCategories.tpl');
    }
    function showArticleAddForm($categories)
    {
        $this->tpl->assign('categorias', $categories);
        $this->tpl->display(PATH . '/tpl/formAddArticle.tpl');
    }
    function showCategoryAddForm()
    {
        $this->tpl->display(PATH . '/tpl/formAddCategory.tpl');
    }
    function showRemoveConfirmation($tipo, $id)
    {
        $this->tpl->assign('id', $id);
        $this->tpl->display(PATH . '/tpl/removeConfirmation.tpl');
    }
    function showLoginForm()
    {
        $this->tpl->display(PATH . '/tpl/formLogin.tpl');
    }
    function showRegisterForm()
    {
        $this->tpl->display(PATH . '/tpl/formRegister.tpl');
    }
    function showError($error)
    {
        $this->tpl->assign('error', $error);
        $this->tpl->display(PATH . '/tpl/error.tpl');
    }*/
}

?>