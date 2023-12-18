<!doctype html>

    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student Data</title>
    </head>
    <body>
      <h1>Full Name: {{ $student->full_name }}</h1>
      <h1>Id Card Address: {{ $student->id_card_address }}</h1>
      <h1>Current Address: {{ $student->current_address }}</h1>
      <h1>District: {{ $student->district }}</h1>
      <h1>Regency: {{ $student->regency }}</h1>
      <h1>Province: {{ $student->province }}</h1>
      <h1>Phone Number: {{ $student->phone_number }}</h1>
      <h1>Email: {{ $student->email }}</h1>
      <h1>Nationality Status: {{ $student->nationality_status }}</h1>
      <h1>Foreign Nationaloty: {{ $student->foreign_nationality }}</h1>
      <h1>Birth Date: {{ $student->birth_date }}</h1>
      <h1>Birth Place: {{ $student->birth_place }}</h1>
      <h1>Gender: {{ $student->gender }}</h1>
      <h1>Marital Status: {{ $student->marital_status }}</h1>
      <h1>Religion: {{ $student->religion }}</h1>
      <h1>Registration Status: {{ $student->registration_status }}</h1>

    <style>
    /*css*/
    </style>
    <br>
     </body>
    </html>