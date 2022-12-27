<script type="text/javascript">
    $(document).ready(function() {
        $('.but').trigger('click');
    })
</script>
<button data-toggle="modal" data-target="#myModal3" style="display:none;" class="but"></button>
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Apa yang Anda lakukan setelah lulus kuliah ?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Kuesioner" method="POST" role="form">
                                <input type="hidden" name="aksi" value="insert_status">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="id_status">
                                        <option>--Pilih--</option>
                                        <%
                                            List<Status> status = (List<Status>) request.getAttribute("status");
                                            for (int i = 0; i < status.size(); i++) {
                                        %>
                                        <option value="<%=status.get(i).getIdStatus() %>"><%=status.get(i).getStatus() %></option>
                                        <%
                                            }
                                        %>
                                    </select>
                                </div>
                                    <div align="right"><button type="submit" class="btn btn-primary">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>