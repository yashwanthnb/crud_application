actionsFormatter = (actionId, users) => {
    let response = "";

        viewNotificationUrl = viewRouteUrl.replace(":user", users.id);
        editNotificationUrl = editRouteUrl.replace(":user", users.id);
        deleteNotificationUrl = deleteRouteUrl.replace(":user", users.id);

        //response+= `<button type="button" class="btn btn-light" onclick="showAddEditUser('${params.id}');">View </button>`;
        response+= `<a href="${viewNotificationUrl}" class="btn btn-light" > View </a>`;
        response+= `<a href="${editNotificationUrl}" class="btn btn-primary" > Edit </a>`;
        response+= `<a href="${deleteNotificationUrl}" class="btn btn-danger" > Delete </a>`;

        //response+= `<button type="button" class="btn btn-danger" onclick="deleteUser('${users.id}');">Delete</button> &nbsp;`

    return response;
}




// downloadFormatter = (actionID,users) => {
//     let response = "";
//     show.replace(":users", users.id);
//     let showUsers = show.replace(":users", users.id);
//     console.log(showUsers);
//     response+= `<a href="${show}">${admin.users.show}`;
//     return response;
// }




// downloadFormatter = (actionId, params) => {
//     let response = "";
//     downloadRouteUrl.replace(":push_notification", params.id);
//     let downloadFileUrl = downloadRouteUrl.replace(":push_notification", params.id);
//     console.log(downloadFileUrl);
//     response+= `<a href="${downloadFileUrl}">${params.file_orig_name} </a>`;
//     return response;
// }
