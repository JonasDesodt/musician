<section>
    <h2>Agenda</h2>
    
    <ul>
        <?php foreach($data as $id): ?> 
            <li>
                <a href="/agenda/<?php echo $id ?>">Concert <?php echo $id ?></a>
            </li>
        <?php endforeach ?>
    </p>
</section>