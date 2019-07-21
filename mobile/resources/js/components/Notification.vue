<template>
    <!-- Notifications Menu -->
    <li class="dropdown notifications-menu">
      <!-- Menu toggle button -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{ notifications.length }}</span>
      </a>
      <ul class="dropdown-menu">
        <li class="header">Kamu mempunyai {{ notifications.length }} notifikasi</li>
        <li>
          <!-- Inner Menu: contains the notifications -->
          <ul class="menu">
            <li v-for="notification in notifications"><!-- start notification -->
                <a v-on:click="MarkAsRead(notification)">
                    Ada pesanan baru dengan ID LS-000{{ notification.data.booking.id }}
                </a>
            </li>
            <!-- end notification -->
          </ul>
        </li>
        <li class="footer"><a href="#">View all</a></li>
      </ul>
    </li>
</template>

<script>
    export default {
        props: ['notifications'],
        methods: {
            MarkAsRead: function(notification) {
                var data = {
                    id: notification.id
                };
                axios.post('/notification/read', data).then(response => {
                    window.location.href = "/post/" + notification.data.post.id;
                });
            }
        }
    }
</script>
