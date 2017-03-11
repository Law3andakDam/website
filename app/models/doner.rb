class Doner < ApplicationRecord
  belongs_to :blood_type
  after_create :send_confirmation_mail

  def send_confirmation_mail
    # send confiration mail to doner
  end
end
