

// Confirm Delete Dialog
function confirmDelete(url,csrf_token, method, title, text) {
 
    swal({
        title: title ?? "هل انت متاكد من الحذف ؟",
        text: text ?? '',
        icon: "warning",
        buttons: true,
        buttons: ["الغاء", "نعم"],
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            const form = document.createElement('form');
            form.method = method ?? 'POST';
            form.action = url;
  
            const methodField = document.createElement('input');
            methodField.type = 'hidden';
            methodField.name = '_method';
            methodField.value = method ?? 'DELETE';
            form.appendChild(methodField);
  
            const tokenField = document.createElement('input');
            tokenField.type = 'hidden';
            tokenField.name = '_token';
            tokenField.value =csrf_token ;
            form.appendChild(tokenField);
  
            document.body.appendChild(form);
            form.submit();
  
  
        } else {
            console.log(willDelete);
        }
    });
  }
  
  