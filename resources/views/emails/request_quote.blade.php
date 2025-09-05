<x-mail::message>

# Demande de Devis

message : {{ $data['message'] }},

budget : {{ $data['budget'] }}

<br>
Téléphone : {{ $data['telephone'] }},

E-email : {{ $data['email'] }}

<br>
nom : {{ $data['nom'] }},

service : {{ $data['service'] }}




Contenu du message :

{!! nl2br( $data['message']) !!}

</x-mail::message>