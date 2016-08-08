<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <table>
            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?= $user->name ?></td>
                </tr>
                <tr>
                    <th>Body</th>
                    <td><?= $user->email ?></td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td><?= $user->created ?></td>
                </tr>
                <tr>
                    <th>Modified</th>
                    <td><?= $user->modified ?></td>
                </tr>
        
            </tbody>
        </table>
