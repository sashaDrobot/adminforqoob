<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Обработанные заказы</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <?php if (empty($vars)): ?>
                            <p>Список заказов пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Заказчик</th>
                                    <th>Контакты</th>
                                    <th>Email</th>
                                    <th>Сообщение</th>
                                    <th>Дата</th>
                                    <th></th>
                                </tr>
                                <?php foreach ($vars as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['phone'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['date'], ENT_QUOTES); ?></td>
                                        <td><a href="/admin/delete/<?php echo $val['id']; ?>" class="delete btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var b = document.getElementsByTagName('body')[0];
    b.classList.add("bg-dark");
</script>
