<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Обработанные заказы</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>Список обработанных заказов пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Заказчик</th>
                                    <th>Контакты</th>
                                    <th>Сообщение</th>
                                    <th></th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td>оккhhhhhhhhhhhhhк</td>
                                        <td>+380000000000</td>
                                        <td>бларблабларблабларблабларблабларбла бларблабларблабларблабларблабларб лабларблабларблабларблабларбла</td>
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

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>&copy; 2018, qoob</small>
        </div>
    </div>
</footer>

<script>
    var b = document.getElementsByTagName('body')[0];
    b.classList.add("bg-dark");
</script>
