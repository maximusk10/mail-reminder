<template>
  <div class="SidebarContainer">
      <div class="SidebarHeader">
          LOGO
      </div>
      <nav class="Sidebar">
          <ul class="Sidebar__List">
              <li class="Sidebar__Element">
                  <a href="/recordatorios/" class="Sidebar__Link">
                      <div class="Sidebar__Icon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <div class="Sidebar__Description">
                          Reminders
                      </div>
                  </a>
              </li>
              <li class="Sidebar__Element">
                  <a href="/config" class="Sidebar__Link">
                      <div class="Sidebar__Icon">
                          <i class="fa fa-cogs"></i>
                      </div>
                      <div class="Sidebar__Description">
                          Config
                      </div>
                  </a>
              </li>
              <li class="Sidebar__Element">
                  <a href="/mail-list" class="Sidebar__Link">
                      <div class="Sidebar__Icon">
                          <i class="fa fa-envelope-o"></i>
                      </div>
                      <div class="Sidebar__Description">
                          Sent Emails
                      </div>
                  </a>
              </li>
              <li class="Sidebar__Element">
                  <a href="/logs" class="Sidebar__Link">
                      <div class="Sidebar__Icon">
                          <i class="fa fa-info-circle"></i>
                      </div>
                      <div class="Sidebar__Description">
                          Logs
                      </div>
                  </a>
              </li>
              <li class="Sidebar__Element">
                  <a href="/stats" class="Sidebar__Link">
                      <div class="Sidebar__Icon">
                          <i class="fa fa-line-chart"></i>
                      </div>
                      <div class="Sidebar__Description">
                          Stats
                      </div>
                  </a>
              </li>
          </ul>
      </nav>
  </div>
</template>
<script>
export default {
  name: "Sidebar",
  mounted: ()=> {
      console.log('wololox');
  }
}
</script>
<style lang="scss" scoped>
    .SidebarContainer {
        background: darken(#0984e3, 10%);
        display: block;
        width: 100%;
        min-width: 120px;
        max-width: 120px;
        min-height: 100vh;
    }
    .Sidebar {
        
    }
    .SidebarHeader {
        background: darken(#0984e3, 20%);
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-weight: bold;
        font-size: 28px;
    }
    .Sidebar__List {
        padding: 0;
        margin: 0;
        width: 100%;
    }
    .Sidebar__Element {
        text-align: center;
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .Sidebar__Link {
        color: white;
        display: block;
        padding: 30px 0;
        transition: .15s ease-in;
        font-size: 16px;
        i {
            padding: 5px 0;
            font-size: 32px;
            opacity: .7;
        }
        &:hover i {
            opacity: 1;
        }
        &:hover {
            background: rgba(255,255,255,.1);
            text-decoration: none;
            font-weight: bold;
        }
    }
    .Sidebar__Icon {

    }
    .Sidebar__Description {

    }
</style>
