<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>{{ $search }} Results</title>
  </head>
  <body>

    <h3>Search Results</h3>

    <p>You searched for "{{ $search }}".</p>

    <table>
      <tr>
        <th>Title</th>
        <th>Rating</th>
        <th>Genre</th>
      </tr>
      @foreach($dvds as $dvd)
        <tr>
          <td>{{ $dvd->title }}</td>
          <td>{{ $dvd->rating_name }}</td>
          <td>{{ $dvd->genre_name }}</td>
        </tr>
      @endforeach
    </table>

  </body>
</html>
