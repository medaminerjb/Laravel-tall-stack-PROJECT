<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes réservations</title>
    <meta name="author" content="bestmomo">
    <meta name="description" content="Les meilleures réservations du web">
    <meta name="keywords" content="vacances,gites">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="<?php echo e(route('home')); ?>">
                    <span class="text-xl pl-2">Mes Vacances</span>
                </a>
            </div>
        </div>

    </nav>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="<?php echo e(route('rents')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 <?php if(Route::currentRouteName() == 'rents'): ?> border-pink-500 <?php else: ?> border-gray-800 <?php endif; ?> hover:border-pink-500">
                            <i class="fas fa-bed pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Réservations</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="<?php echo e(route('payments')); ?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 <?php if(Route::currentRouteName() == 'payments'): ?> border-purple-500 <?php else: ?> border-gray-800 <?php endif; ?> hover:border-purple-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Paiements</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <form action="<?php echo e(route('logout')); ?>" method="POST" hidden>
                            <?php echo csrf_field(); ?>                                
                        </form>
                        <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500" onclick="event.preventDefault(); this.previousElementSibling.submit();">
                            <i class="fa fa-sign-out-alt pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">
                        <?php if(Route::currentRouteName() == 'rents'): ?> 
                            Mes réservations 
                        <?php else: ?> 
                            Mes paiements 
                        <?php endif; ?>                        
                    </h3>
                </div>
            </div>

            <div class="m-5">
                <div>
            <form action="<?php echo e(url('create')); ?>" method="POST">
            <table class="table table-dark">
    <tr> <td>
 <form action="<?php echo e(url('create')); ?>" method="POST">
    
<label for="dated">Date de debut</label><br>
<input type="date" name="dated" >
</td>
<td>


<label for="datef">Date de fin</label><br>
<input type="date" name="datef" >

</td>
 </tr>
 <tr>
    <td>
    <br>
<label for="lieu">Lieu</label><br>
<input type="text" name="lieu"><br>
    </td>
    </tr>
 </table>
 <br>
 <button  type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>


                <?php if(Route::currentRouteName() == 'rents'): ?> 
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('events-table', [])->html();
} elseif ($_instance->childHasBeenRendered('jw01pAL')) {
    $componentId = $_instance->getRenderedChildComponentId('jw01pAL');
    $componentTag = $_instance->getRenderedChildComponentTagName('jw01pAL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jw01pAL');
} else {
    $response = \Livewire\Livewire::mount('events-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('jw01pAL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php else: ?> 
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('payments-table', [])->html();
} elseif ($_instance->childHasBeenRendered('10Ich84')) {
    $componentId = $_instance->getRenderedChildComponentId('10Ich84');
    $componentTag = $_instance->getRenderedChildComponentTagName('10Ich84');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('10Ich84');
} else {
    $response = \Livewire\Livewire::mount('payments-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('10Ich84', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
            </div>

        </div>

    </div>

    <?php echo \Livewire\Livewire::scripts(); ?> 
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('o5AzgrN')) {
    $componentId = $_instance->getRenderedChildComponentId('o5AzgrN');
    $componentTag = $_instance->getRenderedChildComponentTagName('o5AzgrN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o5AzgrN');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('o5AzgrN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    @livewireUIScripts
</body>

</html>
<?php /**PATH C:\laragon\www\mesvacancesv2\resources\views/back/index.blade.php ENDPATH**/ ?>