<template>
  <div>

    <!-- 表单 -->
    <el-form :inline="true" :model="form1" align="left" style="margin-top: 30px">
      <el-form-item label="日期:">
        <el-date-picker
          v-model="form1.dpValue1"
          type="daterange"
          range-separator="~"
          start-placeholder="开始日期"
          end-placeholder="结束日期"
        />
      </el-form-item>

      <el-form-item>
        <el-button type="primary" icon="el-icon-search" @click="onGet">查询 (默认显示最近30天)</el-button>
      </el-form-item>

    </el-form>

    <!-- 表格 -->
    <el-table
      :data="tableData"
      :default-sort="{prop: 'timeBegin', order:'descending'}"

      style="width: 100%; margin-bottom: 24px">
      <el-table-column min-width="10%" prop="channelName" label="渠道" sortable align="center"/>
      <el-table-column min-width="10%" prop="totalPay" label="充值总额(元)" sortable align="center"/>
      <el-table-column min-width="10%" prop="totalCashNum" label="提现总笔数(包括失败)" sortable align="center"/>
      <el-table-column min-width="10%" prop="totalCash" label="提现总额(元)" sortable align="center"/>

      <el-table-column min-width="12%" prop="totalCashChoushui" label="提现手续费总额(元)" sortable align="center"/>
      <el-table-column min-width="12%" prop="totalChoushui" label="抽水总额(元)" sortable align="center"/>
    </el-table>

    <!-- 分页 -->
    <!-- <el-row gutter="20">
      <el-col :span="10" style="text-align: center">
        <el-pagination
          :current-page="currentPage"
          :page-sizes="[10, 20, 30, 40]"
          :page-size="10"
          :total="40"
          layout="total, sizes, prev, pager, next, jumper"
          @size-change="handleSizeChange"
          @current-change="handleCurrentChange"
        />
      </el-col> -->

  </div>
</template>

<script>
import { financeReportGet } from '@/api/finance'

export default {
  data() {
    return {
      form1: {
        dpValue1: ''
      },

      // tableData
      tableData: '',

      // 分页
      currentPage: 4
    }
  },

  created() {
    const dateRange = this.form1.dpValue1

    financeReportGet(dateRange).then(response => {
      if (response.code === 0) {
        this.tableData = response.data
      } else {
        this.$notify({
          title: '获取数据失败',
          message: '',
          type: 'error'
        })
      }
    })
  },

  methods: {

    // 查询
    onGet() {
      const dateRange = this.form1.dpValue1

      financeReportGet(dateRange).then(response => {
        if (response.code === 0) {
          this.tableData = response.data
        } else {
          this.$notify({
            title: '获取数据失败',
            message: '',
            type: 'error'
          })
        }
      })
    },

    // 分页
    handleSizeChange(val) {

    },
    handleCurrentChange(val) {

    }
  }
}
</script>
