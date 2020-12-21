<template>
    <div class="calendar" style="border-style: solid;">
        <div class="calendar__month" id="jan">
                <div class="calendar__picture">
                      <h2>{{date('l \t\h\e jS')}}</h2>
                      <h3>November</h3>
                    </div>
                  </div>
                  <div class="calendar__month" id="feb">
                    <div class="calendar__picture">
                      <h2>{{date('l \t\h\e jS')}}</h2>
                      <h3>feb</h3>
                    </div>
                  </div>
                </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
