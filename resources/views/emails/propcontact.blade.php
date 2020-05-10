@component('mail::message')

# Gracias por contactarnos

Te estaremos escribiendo con más información sobre esta propiedad. 

Hemos recibido la siguiente consulta:

- Email: {{$email->email}}
- Celular: {{$email->phone}}
- Mensaje: {{$email->question}}

¡Muchas gracias por tu interés! 

@component('mail::button', ['url' => 'https://ibarzabal.com'])
    Volver al sitio
@endcomponent

@endcomponent