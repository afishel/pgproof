<template>
  <div class="page">
    <app-header :page-title="title"></app-header>
    <div class="page-content">
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>Scheduled On</th>
              <th>Type</th>
              <th>Organization</th>
              <th>Site</th>
              <th>Inspector</th>
              <th>Status</th>
              <th>Recurring</th>
              <th>Performed On</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in inspections" :key="item.id">
              <td>{{ item.scheduled_at }}</td>
              <td>{{ item.type }}</td>
              <td>{{ item.organization }}</td>
              <td>{{ item.site }}</td>
              <td>{{ item.inspector }}</td>
              <td>{{ item.status }}</td>
              <td>{{ item.recurring }}</td>
              <td>{{ item.performed_at }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script src="./Inspections.js"></script>
