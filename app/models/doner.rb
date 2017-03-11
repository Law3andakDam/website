class Doner < ApplicationRecord
  belongs_to :blood_type
  
  validates :mobile, :email, :blood_type_id, presence: true
  validates :email, format: { with: Devise.email_regexp }

  after_create :send_confirmation_mail

  def send_confirmation_mail
    # send confiration mail to doner
  end
end
