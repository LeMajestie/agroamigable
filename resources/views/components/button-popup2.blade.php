<script type="text/javascript">
    {
        var abierto2 = false;
    }
</script>
@if (session('create_category_error'))
<script type="text/javascript">
    {
        var abierto2 = true;
        console.log("el error existe");
    }
</script>
@endif
<script type="text/javascript">
    {
        console.log("la variable es:");
    }
</script>

<script type="text/javascript">
</script>

<div x-data="{ modelOpen: abierto2 }">
    <button @click="modelOpen =!modelOpen" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
        <span>Descargar Libro
        </span>
    </button>
</div>