$(document).ready(function(){var e="d M yyyy",a=Date.parse($("input[name=delivery_date]").val());null!=a&&$("#delivery_date_email").val(a.toString("yyyy-MM-dd")),$("#datepicker-email").datepicker({autoclose:!0,endDate:datePickerEndDate,format:e,language:PICKER_LANG,orientation:"auto",startDate:"-1d",todayHighlight:!0}).on("changeDate",function(e){e.date&&$("#delivery_date_email").val(e.date.toString("yyyy-MM-dd"))})});