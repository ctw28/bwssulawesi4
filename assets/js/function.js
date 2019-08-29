      $(document).ready(function() {

        
          clockUpdate();
          setInterval(clockUpdate, 1000);

          $('#info').breakingNews({
              height: 35,
              fontSize: 12,
              themeColor: "default",
              background: "#002B5C",
              borderWidth: 0,
              radius: 10,
              zIndex: 99999
          });
      })

      function clockUpdate() {
          var date = new Date();
          var hari = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu',];
          var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
          function addZero(x) {
              if (x < 10) {
                  return x = '0' + x;
              } else {
                  return x;
              }
          }

          var todayDate = hari[date.getDay()]+ ', ' +addZero(date.getDate()) + ' ' +bulan[date.getMonth()] + ' ' + date.getFullYear();
          var h = addZero(date.getHours());
          var m = addZero(date.getMinutes());
          var s = addZero(date.getSeconds());

          $('.real-time').text(todayDate + ' | ' + h + ':' + m + ':' + s)
      }

