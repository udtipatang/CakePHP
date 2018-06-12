
<h1>Articles</h1>

<?= $this->Html->link('Add Article', ['action' => 'add']) ?>

<table class="table table-hover">
    <thead>
    <tr>
        <th>User ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Link</th>
    </tr>
    </thead>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->
    <tbody>

        <?php
            
    foreach ($data as $article){  ?>

        <tr>

            <td>
                <?php echo $article['id'] ?>
            </td>
            <td>
                <?php echo $article['title'] ?>
            </td>
            <td>
                <?php echo $article['body'] ?>
            </td>
            <td>
                <?php echo $this->Html->link($article['title'] ,['controller'=>'Articles', 'action' => 'view',$article['slug']]) ?>
            </td>
            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $article['slug']]) ?>
            </td>
        <?php } ?>
    </tbody>
</table>

         
  

