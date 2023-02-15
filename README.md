# E-commerce con Laravel 9

## Resumen

En este proyecto se realizo un E-Commerce funcional con Laravel 9 mediante la utilizacion de Rutas, Controles, Modelos, Migraciones, Api's de metodos de pago y Librerias para filtrado de informacion. Las tecnologias utilizadas fueron (Laravel 9, PHP, MySql y CSS)

### Principales Librerias y Api's Utilizadas
- Livewire
- Api de MercadoPago

### Principales tareas y funcionalidades

- Sistema de registro y logueo
- Sistema de Filtrado de productos
- Render Random de Productos
- Lista de Favoritos (Agregar y eliminar)
- Carrito de Compras (Agregar y eliminar)
- Cambio de cantidades de un producto desde la vista del carrito
- Pagina con informacion detallada de cada producto
- Checkout con api de MercadoPago

#

## Pagina de Inicio

![Laravel E-Commerce - Google Chrome 15_2_2023 09_31_42](https://user-images.githubusercontent.com/111323259/219030002-6dfc6b01-d276-4bc0-8968-bf5ea194a6c2.png)

- Una vez logueado se ve la siguente pagina con 2 anuncios y una seccion de productos destacados que va cambiando de forma aleatoria.

https://user-images.githubusercontent.com/111323259/219030265-5e09df23-6c35-40e1-a046-4f5b9fe82e75.mp4

#

## Pagina de "Collections"

https://user-images.githubusercontent.com/111323259/219030635-2044c89c-dc02-460b-a716-8b20ea2b6f3b.mp4

- Esta es una seccion de la pagina dedicada a los anuncios del sitio con links que redirigen directamente al shop donde se veran todos los productos disponibles

#

## Pagina de "Shop"

![Laravel E-Commerce - Google Chrome 15_2_2023 09_33_15](https://user-images.githubusercontent.com/111323259/219030814-a865c0fd-d7af-41b2-9cf7-09cf01e05033.png)

- En esta pagina se pueden visualizar todos los productos ademas de una casilla a la derecha con un sistema de filtrado hecho con la libreria LiveWire de Laravel

![Laravel E-Commerce - Google Chrome 15_2_2023 09_33_35](https://user-images.githubusercontent.com/111323259/219031144-88459471-eff9-49ce-85de-539c3712a8b2.png)

### Video Mostrando su funcionamiento

https://user-images.githubusercontent.com/111323259/219031240-decaec54-1359-4804-b008-630646d67e62.mp4

#

## Favoritos

- Tambien tenemos la posibilidad de agregar los productos que mas te gusten a una lista de favoritos a la cual podras acceder mediante el corazon ubicado en la barra de navegacion.

https://user-images.githubusercontent.com/111323259/219031879-3c5301e4-c104-4d60-86f5-da26315f9d7f.mp4

- Una vez alli podras tanto agregar ese producto al carrito como eliminarlo de la lista de Favoritos

### Proceso de agregado de un elemento a la lista de Favoritos

https://user-images.githubusercontent.com/111323259/219032034-04562438-694c-4f6e-8eee-8a4636267e90.mp4

#

## Info de los Productos

- Tambien tenemos la posibilidad de ver los detalles y la informacion de un producto que eligamos, esto de puede lograr al precionar el titulo del producto en la pagina de "Shop" o al precionar el boton de "More Info" en la pagina de inicio.

https://user-images.githubusercontent.com/111323259/219032879-e5a5db0a-d8c2-4b58-8d9a-962303860bf7.mp4

- Aca tendremos la posibilidad de agregar el producto al carrito.

#

##Carrito 

- A este podremos acceder desde cualquier parte de la pagina simplemente precionando el carrito en el margen superior derecho de la barra de navegacion

https://user-images.githubusercontent.com/111323259/219033183-e682a15d-1caa-45aa-971a-dc30a39d54aa.mp4

#

### Checkout

- Una vez en el carrito podremos presionar el boton de finalizar compra y se abrira un modal en el cual podremos seguir con el proceso de pago

https://user-images.githubusercontent.com/111323259/219033308-b0459077-b89c-4bc0-b764-bd727ef3a74b.mp4

- Una vez elegido el metodo de pago e introducido los datos necesario (Targeta de credito, debito, DNI) ya podremos elegir la cantidad de cuotas con las que queremos realizar la compra

![Laravel E-Commerce - Google Chrome 15_2_2023 09_38_20](https://user-images.githubusercontent.com/111323259/219033626-a668098d-cd64-4bf3-9950-17ae1b7b2735.png)

- Despues de elegir la cuotas tendremos un resumen de la compra con los datos ingresados y el monto a pagar, aqui podremos porfin terminar la compra presionando el boton pagar

![Laravel E-Commerce - Google Chrome 15_2_2023 09_38_35](https://user-images.githubusercontent.com/111323259/219033995-7e05ee33-644a-4c67-99b8-4af28f43518f.png)

- Finalmente en caso de que este todo correcto nos mostrara el siguiente modal con el mensaje de que la compra se ha hecho satisfactoriamente.

![Laravel E-Commerce - Google Chrome 15_2_2023 09_38_48](https://user-images.githubusercontent.com/111323259/219034332-42b50e73-0e7f-436d-9360-581cfe79f7cd.png)

# 

## Todos los derechos reservados &copy; Lucas Abbona 2023
