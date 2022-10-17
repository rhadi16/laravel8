/* globals Chart:false, feather:false */
$(document).ready(function () {
  $('#dttable').DataTable();

  // $('#posts').DataTable( {
  //     ajax: {
  //       url: 'http://127.0.0.1:8000/dashboard/api/posts',
  //       method: "GET",
  //       xhrFields: {
  //         withCredentials: true
  //       }
  //     },
  //     columns: [
  //       { data: "id" },
  //       { data: "title" },
  //       { data: "category.name" },
  //       { data: "user_id" }
  //         /*and so on, keep adding data elements here for all your columns.*/
  //     ]
  // });
});
(() => {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

})()
