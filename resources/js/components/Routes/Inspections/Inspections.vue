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
            <tr v-for="item in inspections.items" :key="item.id">
              <td>{{ item.scheduled_at }}</td>
              <td>{{ item.inspection_type.name }}</td>
              <td>{{ item.site.organization.name }}</td>
              <td>{{ item.site.name }}</td>
              <td>{{ item.inspector.full_name }}</td>
              <td>{{ item.inspection_status.name }}</td>
              <td>{{ item.inspection_recurrence_id ? 'Yes' : 'No' }}</td>
              <td>{{ item.ended_at }}</td>
            </tr>
          </tbody>
        </table>
        <paginate v-if="inspections.pagination.last_page > 1"
          v-model="inspections.pagination.current_page"
          :pageCount="inspections.pagination.last_page"
          :clickHandler="toPage"
        />
      </div>
    </div>
  </div>
</template>

<script src="./Inspections.js"></script>
