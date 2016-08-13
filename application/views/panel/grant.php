<script type="text/javascript" src="<?php echo base_url();?>assets/dhtmlx/codebase/common/testdata.js"></script>

<div id="gantt_here" style="height: 100%;width: 100%;padding-left:1%;padding-top:28%;padding-right: 1%;"></div>
<script type="text/javascript">
    gantt.config.work_time = true;
    gantt.config.scale_unit = "day";
    gantt.config.date_scale = "%D, %d";
    gantt.config.min_column_width = 10;
    gantt.config.duration_unit = "day";
    gantt.config.scale_height = 20*3;
    gantt.config.row_height = 30;



    var weekScaleTemplate = function(date){
        var dateToStr = gantt.date.date_to_str("%d %M");
        var weekNum = gantt.date.date_to_str("(week %W)");
        var endDate = gantt.date.add(gantt.date.add(date, 1, "week"), -1, "day");
        return dateToStr(date) + " - " + dateToStr(endDate) + " " + weekNum(date);
    };

    gantt.config.subscales = [
        {unit:"month", step:1, date:"%F, %Y"},
        {unit:"week", step:1, template:weekScaleTemplate}

    ];

    gantt.templates.task_cell_class = function(task, date){
        if(!gantt.isWorkTime(date))
            return "week_end";
        return "";
    };

    gantt.init("gantt_here");
    gantt.parse(demo_tasks);
</script>