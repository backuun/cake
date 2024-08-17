const daysIndonesian = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const monthsIndonesian = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $('#iso-input').datetimepicker({
        footer: true,
        modal: true,
        format: 'yyyy-mm-dd HH:MM',
        change: function (e) {
            const selectedDateTime = $('#iso-input').val();
            const date = new Date(selectedDateTime);

            // Pastikan `date` valid sebelum memformat
            if (!isNaN(date.getTime())) {
                const dayName = daysIndonesian[date.getDay()];
                const monthName = monthsIndonesian[date.getMonth()];
                const formattedDateTime = `${dayName}, ${date.getDate()} ${monthName} ${date.getFullYear()} - ${String(date.getHours()).padStart(2, '0')}:${String(date.getMinutes()).padStart(2, '0')} WIB`;

                // Set the formatted date in the poppins input
                $('#poppins').val(formattedDateTime);
            }
        }
    });

    // Buka kalender ketika input poppins diklik
    $('#poppins').on('click', function () {
        $('#iso-input').datetimepicker('open');
    });