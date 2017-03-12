class CasesController < ApplicationController
  def new
    @case = Case.new
    load_blood_types
  end

  def create
    @case = Case.new(case_params)
    if @case.save
      redirect_to root_url, notice: 'blood request saved successfully'
    else
      load_blood_types
      render :new
    end
  end

  private

  def case_params
    params.require(:case).permit(:name, :email, :telephone, :hospital, :blood_type_id)
  end
end
