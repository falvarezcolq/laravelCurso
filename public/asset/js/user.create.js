function loadProfessions(){
    var profession  = $('#profession_id');
    var route = 'http://localhost/laravelCurso/public/'+'listar';
    $get(route,function(res){
        console.log(res);
    });
}

loadProfessions();