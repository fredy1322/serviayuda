
<!DOCTYPE html>
<html lang="es">
    <head>
    <script src="alert.min.js"></script>
    </head>
    <body>
       
        <script>


// Swal.fire({
//   title: '<strong>HTML <u>example</u></strong>',
//   icon: 'info',
//   html:
//     'You can use <b>bold text</b>, ' +
//     '<a href="//sweetalert2.github.io">links</a> ' +
//     'and other HTML tags',
//   showCloseButton: true,
//   showCancelButton: true,
//   focusConfirm: false,
//   confirmButtonText:
//     '<i class="fa fa-thumbs-up"></i> Great!',
//   confirmButtonAriaLabel: 'Thumbs up, great!',
//   cancelButtonText:
//     '<i class="fa fa-thumbs-down"></i>',
//   cancelButtonAriaLabel: 'Thumbs down'
// })


Swal.fire({
    icon: 'question',
    title: `¿Ya cuenta con un agente para el cambio?`,
    text: `En caso de no tener agente el sistema enviará la solicitud a todos los agentes que cuenten con el horario que usted requiere, solo un agente podrá aceptar la solicitud`,
    showCloseButton: true,
  showCancelButton: true,
    confirmButtonText:
    '<a href="google.com">Si</a>',
    cancelButtonText:
    '<a href="google.com">No</a><i class="fa fa-thumbs-down"></i>',
  cancelButtonAriaLabel: 'Thumbs down'
});


        </script>
    </body>
</html>
