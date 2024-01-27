@include('\admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div contact="container">
  <h2>contacts</h2>
  <p>HERE IS A TABLE WITH ALL contacts :</p>            
  <table contact="table table-hover">
    <thead>
      <tr>
        
        
        <th>From</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        
        
        <th>show</th>
        <th>Delete</th>
        <th>Unread Messages</th>
      </tr>                                    
    </thead>
    <tbody>
      <tr>
        @foreach($contacts as $contact)
        <td>{{$contact->from}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->subject}}</td>
        <td>{{$contact->message}}</td>

        
            <td><a href="showmsg/{{ $contact->id }}">show</a></td>
            <td><a href="deletemsg/{{ $contact->id }}"onclick = "return confirm('Are you sure you want to delete?')"; >Delete</a></td>
            
            @if($contact->unread_count == 0)
            <td><a href="showunread/{{ $contact->id }}">UnreadMessages</a></td>
          @endif
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html> 