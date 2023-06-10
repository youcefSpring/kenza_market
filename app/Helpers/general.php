<?php


define('PAGINATION_COUNT',50);

function getFolder(){
    // return app()->getLocale() == 'ar' ?'css-rtl' : 'css';
    return app()->getLocale() == 'ar' ?'css-rtl' : 'css';
}

function nbrEmp(){
    if (Schema::hasTable('employees')) {
        return DB::table('employees')->count();

    }
}

function code_to_role($id){
    switch($id){

    case 1 :
        return 'commercant';
        break;
    case 2 :
        return 'livreur';
        break;
    case 3 :
            return 'anpcecom';
            break;

    case 4 :
                return 'avocat';
                break;
    case 5 :
                    return 'admin';
                    break;

    default :
        return 'user';

    }
}

















?>
