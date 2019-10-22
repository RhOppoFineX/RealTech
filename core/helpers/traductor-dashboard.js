var lang = localStorage.getItem('language');

$(document).ready(function(){
    if (lang != null) {
        showTraslate(lang);
    } else {
        showTraslate('ES');
    }
})

function showTraslate(id) { 
    $('.idioma').text(id);
    $('.lang').each(function(index, element) {
        $(this).text(arrLang[id][$(this).attr('key')]);
    })
}

function showEs() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
}

function showEn() {
    showTraslate('EN');
    localStorage.setItem('language', 'EN');
}

function showEs2() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
}

function ShowEs2() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
    destroyTable('tabla-libros');
    initTable2('tabla-libros');
}


function ShowEn2() {
    showTraslate('EN');
    localStorage.setItem('language', 'EN');
    destroyTable('tabla-libros');
    initTable2('tabla-libros');
}

// function saludo()
// {
//     var greeting = null;
//     let today = new Date();
//     let hour = today.getHours();
//     var idioma2 = localStorage.getItem('language');

//     if (hour < 12) {
//        idioma2 == 'ES' ? greeting = 'Buenos días' : greeting = 'Good Moorning';
//     } else if (hour < 19) {
//         idioma2 == 'ES' ? greeting = 'Buenas tardes' : greeting = 'Good Affternoom';       
//     } else if (hour <= 23) {
//         idioma2 == 'ES' ? greeting = 'Buenas noches' : greeting = 'Good Night';       
//     }   

//     console.log(idioma2);
//     return greeting;    
// }

var arrLang = {
    'ES': {
        'menu-producto': 'productos',
        'menu-categoria': 'Categorias',        
        'menu-usuarios': 'Usuarios',
        'titulo1': 'Cantidad de productos por categoria',
        'titulo2': 'Cantidad de productos activos e inactivos',
        'titulo3': 'Productos del más caro al más barato',
        'saludazo' : 'Bienvenido', 
        'greeting' : 'Buenas Tardes',
        'producto-imagen' : 'Imagen',
        'producto-nombre' : 'Nombre',
        'producto-precio' : 'Precio(US$)',
        'producto-categoria' : 'Categoría',
        'producto-estado' : 'Estado',
        'producto-accion' : 'Acción',
        'usuarios-apellidos' : 'Apellidos', 
        'usuarios-nombres' : 'Nombres', 
        'usuarios-correo' : 'Correo',
        'usuarios-alias' : 'Alias',
        'usuarios-accion' : 'Acción',
        'categoria-imagen' : 'Imagen', 
        'categoria-nombre' : 'Nombre',
        'categoria-descripcion' : 'Descripción',
        'categoria-accion' : 'Acción'
       
    },
    'EN':{
        'menu-producto': 'products',
        'menu-categoria': 'Categorys',        
        'menu-usuarios': 'Users',
        'titulo1': 'Number of products by category',
        'titulo2': 'Quantity of active and inactive products',
        'titulo3': 'Products from the most expensive to the cheapest',
        'saludazo' : 'Welcome', 
        'greeting' : 'Good Aftternoom',
        'producto-imagen' : 'Image',
        'producto-nombre' : 'Name',
        'producto-precio' : 'Price(US$)',
        'producto-categoria' : 'Category',
        'producto-estado' : 'State',
        'producto-accion' : 'Action',
        'usuarios-apellidos' : 'Last name', 
        'usuarios-nombres' : 'Names', 
        'usuarios-correo' : 'E-mail',
        'usuarios-alias' : 'Nickname',
        'usuarios-accion' : 'Action',
        'categoria-imagen' : 'Image', 
        'categoria-nombre' : 'Name',
        'categoria-descripcion' : 'Description',
        'categoria-accion' : 'Action'
    }
}