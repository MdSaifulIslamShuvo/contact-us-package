@component('mail::message')

    <h3>Name : {{ $contact["fname"] }} {{ $contact["lname"] }} <br>
        Email : {{ $contact["email"] }}<br>
        Comment : {{ $contact["comment"] }}  </h3>

@endcomponent
