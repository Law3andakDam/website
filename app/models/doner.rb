class Doner < ApplicationRecord
  belongs_to :blood_type

  validates :mobile, :email, :blood_type_id, presence: true
  validates :email, format: { with: Devise.email_regexp }, uniqueness: true

  before_validation :set_confirmation_token
  after_commit :send_confirmation_mail, on: :create

  scope :actived, -> { where.not(confirmed_at: nil) }

  def send_confirmation_mail
    DonerMailer.confirmation_email(self).deliver_later
  end

  def set_confirmation_token
    self.confirmation_token = Devise.friendly_token(rand(20...50)) if confirmation_token.nil?
  end
end
