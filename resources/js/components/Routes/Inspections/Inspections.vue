<template>
  <div class="page">
    <app-header :page-title="title"></app-header>
    <div class="page-content">
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th @click="sortBy('scheduled_at')">Scheduled On</th>
              <th>Type</th>
              <th>Organization</th>
              <th>Site</th>
              <th>Inspector</th>
              <th>Status</th>
              <th>Recurring</th>
              <th>Performed On</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in items" :key="item.id" :class="{ downloaded: checkSaved(item.id) }">
              <td>{{ item.scheduled_at | moment('L') }}</td>
              <td>{{ item.inspection_type.name }}</td>
              <td>{{ item.site.organization.name }}</td>
              <td>{{ item.site.name }}</td>
              <td>{{ item.inspector.full_name }}</td>
              <td>{{ item.inspection_status.name }}</td>
              <td>{{ item.inspection_recurrence_id ? 'Yes' : 'No' }}</td>
              <td>{{ item.ended_at | moment('L LT') }}</td>
              <td><button type="button" @click="downloadInspection(item)"><icon :icon="'cloud_download'" /></button></td>
            </tr>
          </tbody>
        </table>
        <paginate v-if="pagination.last_page > 1"
          v-model="pagination.current_page"
          :pageCount="pagination.last_page"
          :clickHandler="toPage"
        />
      </div>
    </div>
  </div>
</template>

<script src="./Inspections.js"></script>
