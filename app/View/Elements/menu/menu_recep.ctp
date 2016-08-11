<ul class="list-accordion">
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-home zmdi-hc-fw')) . "<span class='list-label'>Home</span>", array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>  </li>

    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-accounts')) . "<span class='list-label'>Customer</span>", array('controller' => 'Customers', 'action' => 'index'), array('escape' => false)); ?>  </li>


</ul>