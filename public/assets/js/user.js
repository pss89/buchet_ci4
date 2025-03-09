function join(){
  let formData = $('#joinForm').serialize();
  
  // ajax 통신
  $.ajax({
    url: '/join',
    type: 'post',
    data: formData,
    headers: {
      // 'Content-Type': 'application/json',
      'X-CSRF-TOKEN': $('meta[name="X-CSRF-TOKEN"]').attr('content')
    },
    success: function(response){
      console.log(response);

      if (response.result == 1) {
        alert('회원가입 성공');
        location.href = '/';
      } else {
        alert('회원가입 실패');
        return false;
      }
    }
  });
}

$(function(){
  console.log('즉시실행')
});