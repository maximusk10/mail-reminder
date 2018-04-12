<template>
  <div class="Index">
      <Sidebar></Sidebar>
        <div class="card index-card">
          <h5 class="card-header">Bienvenido</h5>
          <div class="card-body">
            <h5 class="card-title">Sistema de gestión de mailing para e-commerce</h5>
            <p class="card-text">Para comenzar, por favor seleccione una de las opciones del panel lateral.</p>
            <a href="#" class="btn btn-info">Ver Recordatorios Vigentes</a>
          </div>
        </div>
      </div>
</template>

<script>
import Sidebar from '../Sidebar'
export default {
  name: "Index",
  components: {
    Sidebar
  }
}
</script>
<style>
  .Index {
    display: flex;
  }
  .content {
    padding: 20px;
    width: 90%;
  }
</style>


